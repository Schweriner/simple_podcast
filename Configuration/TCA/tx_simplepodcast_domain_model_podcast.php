<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'title,link,description,duration,keywords,explicit,podcast_channel',
        'typeicon_classes' => [
            'default' => 'simple-podcast-item',
        ],
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, link, description, image, audio, duration, keywords, explicit, podcast_channel',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, link, description, image, audio, duration, keywords, explicit, podcast_channel, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_simplepodcast_domain_model_podcast',
                'foreign_table_where' => 'AND tx_simplepodcast_domain_model_podcast.pid=###CURRENT_PID### AND tx_simplepodcast_domain_model_podcast.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'title' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'link' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.link',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
                'default' => 'http://',
			    'eval' => 'trim,required',
//                'wizards' => [
//                    'link' => [
//                        'type' => 'popup',
//                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
//                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
//                        'module' => [
//                            'name' => 'wizard_link',
//                        ],
//                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
//                    ]
//                ],
			],
	    ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1,
                    'minitems' => 0
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'audio' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.audio',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'audio',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'maxitems' => 1,
                    'minitems' => 1
                ],
                'm4a, mp3, mp4, m4v'
            ),
        ],
	    'description' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim,required'
			]
	    ],
	    'duration' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.duration',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim, required'
			],
	    ],
	    'keywords' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.keywords',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'explicit' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.explicit',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	    ],
	    'podcast_channel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcast.podcast_channel',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_simplepodcast_domain_model_podcastchannel',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],
        'crdate' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],
];
