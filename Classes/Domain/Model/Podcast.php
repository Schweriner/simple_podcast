<?php
namespace PB\SimplePodcast\Domain\Model;

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

/**
 * Podcast
 */
class Podcast extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * podcastChannel
     *
     * @var \PB\SimplePodcast\Domain\Model\PodcastChannel
     */
    protected $podcastChannel = null;

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * link
     *
     * @var string
     * @validate NotEmpty
     */
    protected $link = '';

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * duration
     *
     * @var string
     */
    protected $duration = '';

    /**
     * keywords
     *
     * @var string
     */
    protected $keywords = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $image = null;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $audio = null;

    /**
     * explicit
     *
     * @var bool
     */
    protected $explicit = false;

    /**
     * @var int
     */
    protected $crdate = 0;

    /**
     * Returns the podcastChannel
     *
     * @return \PB\SimplePodcast\Domain\Model\PodcastChannel $podcastChannel
     */
    public function getPodcastChannel()
    {
        return $this->podcastChannel;
    }

    /**
     * Sets the podcastChannel
     *
     * @param \PB\SimplePodcast\Domain\Model\PodcastChannel $podcastChannel
     * @return void
     */
    public function setPodcastChannel(\PB\SimplePodcast\Domain\Model\PodcastChannel $podcastChannel)
    {
        $this->podcastChannel = $podcastChannel;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the duration
     *
     * @return string $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets the duration
     *
     * @param string $duration
     * @return void
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Returns the keywords
     *
     * @return string $keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets the keywords
     *
     * @param string $keywords
     * @return void
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * Returns the explicit
     *
     * @return bool $explicit
     */
    public function getExplicit()
    {
        return $this->explicit;
    }

    /**
     * Sets the explicit
     *
     * @param bool $explicit
     * @return void
     */
    public function setExplicit($explicit)
    {
        $this->explicit = $explicit;
    }

    /**
     * Returns the boolean state of explicit
     *
     * @return bool
     */
    public function isExplicit()
    {
        return $this->explicit;
    }

    /**
     * @return int
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param int $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $audio
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
    }
}
