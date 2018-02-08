<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel',
        'label' => 'channel_name',
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
        ],
        'searchFields' => 'channel_name,link,subtitle,image,description,language,author,category,author_mail,keywords,explicit,copyright,itunes_owner,itunes_owner_mail',
        'typeicon_classes' => [
            'default' => 'simple-podcast-channel',
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, channel_name, link, subtitle, image, description, language, author, category, author_mail, keywords, explicit, copyright, itunes_owner, itunes_owner_mail',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, channel_name, link, subtitle, image, description, language, author, category, author_mail, keywords, explicit, copyright, itunes_owner, itunes_owner_mail'],
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
                'foreign_table' => 'tx_simplepodcast_domain_model_podcastchannel',
                'foreign_table_where' => 'AND tx_simplepodcast_domain_model_podcastchannel.pid=###CURRENT_PID### AND tx_simplepodcast_domain_model_podcastchannel.sys_language_uid IN (-1,0)',
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
        'channel_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.channel_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.link',
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
//                'softref' => 'typolink'
            ],
        ],
        'subtitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.subtitle',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.image',
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
                    'minitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 5,
                'eval' => 'trim,required'
            ]
        ],
        'language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.language',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'author' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.author',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Arts', 'Arts'],
                    ['Business', 'Business'],
                    ['Comedy', 'Comedy'],
                    ['Education', 'Education'],
                    ['Games & Hobbies', 'Games & Hobbies'],
                    ['Government & Organizations', 'Government & Organizations'],
                    ['Health', 'Health'],
                    ['Music','Music'],
                    ['News & Politics', 'News & Politics'],
                    ['Science & Medicine', 'Science & Medicine'],
                    ['Society & Culture', 'Society & Culture'],
                    ['Sports & Recreation', 'Sports & Recreation'],
                    ['Technology', 'Technology'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'author_mail' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.author_mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'keywords' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.keywords',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'explicit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.explicit',
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
        'copyright' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.copyright',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'itunes_owner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.itunes_owner',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'itunes_owner_mail' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simple_podcast/Resources/Private/Language/locallang.xlf:tx_simplepodcast_domain_model_podcastchannel.itunes_owner_mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'podcasts' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_simplepodcast_domain_model_podcast',
                'foreign_field' => 'podcast_channel'
            ]
        ]
    ],
];
