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
 * PodcastChannel
 */
class PodcastChannel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * channelName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $channelName = '';

    /**
     * link
     *
     * @var string
     * @validate NotEmpty
     */
    protected $link = '';

    /**
     * subtitle
     *
     * @var string
     * @validate NotEmpty
     */
    protected $subtitle = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $image = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PB\SimplePodcast\Domain\Model\Podcast>
     */
    protected $podcasts = null;

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * language
     *
     * @var string
     * @validate NotEmpty
     */
    protected $language = '';

    /**
     * author
     *
     * @var string
     * @validate NotEmpty
     */
    protected $author = '';

    /**
     * authorMail
     *
     * @var string
     */
    protected $authorMail = '';

    /**
     * category
     *
     * @var string
     * @validate NotEmpty
     */
    protected $category = '';

    /**
     * keywords
     *
     * @var string
     */
    protected $keywords = '';

    /**
     * explicit
     *
     * @var bool
     */
    protected $explicit = false;

    /**
     * copyright
     *
     * @var string
     */
    protected $copyright = '';

    /**
     * itunesOwner
     *
     * @var string
     */
    protected $itunesOwner = '';

    /**
     * itunesOwnerMail
     *
     * @var string
     */
    protected $itunesOwnerMail = '';

    /**
     * __construct
     */
    public function __construct() {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects() {
        $this->podcasts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the channelName
     *
     * @return string $channelName
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * Sets the channelName
     *
     * @param string $channelName
     * @return void
     */
    public function setChannelName($channelName)
    {
        $this->channelName = $channelName;
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
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
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
     * Returns the language
     *
     * @return string $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the language
     *
     * @param string $language
     * @return void
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the authorMail
     *
     * @return string $authorMail
     */
    public function getAuthorMail()
    {
        return $this->authorMail;
    }

    /**
     * Sets the authorMail
     *
     * @param string $authorMail
     * @return void
     */
    public function setAuthorMail($authorMail)
    {
        $this->authorMail = $authorMail;
    }

    /**
     * Returns the category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     * Returns the copyright
     *
     * @return string $copyright
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets the copyright
     *
     * @param string $copyright
     * @return void
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * Returns the itunesOwner
     *
     * @return string $itunesOwner
     */
    public function getItunesOwner()
    {
        return $this->itunesOwner;
    }

    /**
     * Sets the itunesOwner
     *
     * @param string $itunesOwner
     * @return void
     */
    public function setItunesOwner($itunesOwner)
    {
        $this->itunesOwner = $itunesOwner;
    }

    /**
     * Returns the itunesOwnerMail
     *
     * @return string $itunesOwnerMail
     */
    public function getItunesOwnerMail()
    {
        return $this->itunesOwnerMail;
    }

    /**
     * Sets the itunesOwnerMail
     *
     * @param string $itunesOwnerMail
     * @return void
     */
    public function setItunesOwnerMail($itunesOwnerMail)
    {
        $this->itunesOwnerMail = $itunesOwnerMail;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PB\SimplePodcast\Domain\Model\Podcast>
     */
    public function getPodcasts()
    {
        return $this->podcasts;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PB\SimplePodcast\Domain\Model\Podcast> $podcasts
     */
    public function setPodcasts($podcasts)
    {
        $this->podcasts = $podcasts;
    }
}
