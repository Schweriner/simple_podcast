<?php
namespace PB\SimplePodcast\Controller;

/***
 *
 * This file is part of the "Simple Podcast" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Paul Beck &lt;hi@toll-paul.de&gt;, Toll, Paul!
 *
 ***/

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * PodcastChannelController
 */
class PodcastChannelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * podcastChannelRepository
     *
     * @var \PB\SimplePodcast\Domain\Repository\PodcastChannelRepository
     * @inject
     */
    protected $podcastChannelRepository = null;

    /**
     * action show
     * @return void
     */
    public function showAction()
    {
        if(true === empty($this->settings['channel'])) {
            $this->addFlashMessage('No channel has been selected.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        } else {
            $podcastChannel = $this->podcastChannelRepository->findByUid($this->settings['channel']);
            $this->view->assign('podcastChannel', $podcastChannel);
        }
    }

    /**
     * Set the template file to XML
     * @return void
     */
    public function initializeFeedAction()
    {
        $this->request->setFormat('xml');
    }

    /**
     * @return void
     */
    public function feedAction() {
        if(null !== GeneralUtility::_GET('podcastId')
            && true === \TYPO3\CMS\Core\Utility\MathUtility::canBeInterpretedAsInteger(GeneralUtility::_GET('podcastId'))) {

            $channels = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
            $channel = $this->podcastChannelRepository->findByUid((int) GeneralUtility::_GET('podcastId'));
            if($channel !== null) {
                $channels->attach($channel);
            }

        } else {
            $channels = $this->podcastChannelRepository->findAll();
        }

        $this->view->assignMultiple([
           'channels' => $channels
        ]);

    }
}
