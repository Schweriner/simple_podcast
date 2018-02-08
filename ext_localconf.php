<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'simple-podcast-channel',
            \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
            [
                'name'     => 'headphones',
            ]
        );

        $iconRegistry->registerIcon(
            'simple-podcast-item',
            \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
            [
                'name'     => 'volume-up',
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PB.SimplePodcast',
            'Podcast',
            [
                'PodcastChannel' => 'show, feed'
            ],
            // non-cacheable actions
            [
                'PodcastChannel' => 'feed'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					podcast {
						iconIdentifier = simple-podcast-channel
						title = LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:podcast_pluginname
						description = LLL:EXT:simple_podcast/Resources/Private/Language/locallang_db.xlf:tx_simple_podcast_domain_model_podcast.description
						tt_content_defValues {
							CType = list
							list_type = simplepodcast_podcast
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
