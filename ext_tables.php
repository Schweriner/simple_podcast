<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PB.SimplePodcast',
            'Podcast',
            'Podcast Channel'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Simple Podcast');
    },
    $_EXTKEY
);
