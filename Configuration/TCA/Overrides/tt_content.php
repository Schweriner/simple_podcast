<?php
defined('TYPO3_MODE') || die('Access denied.');

$pluginSignature = 'simplepodcast_podcast';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:simple_podcast/Configuration/Flexform/flexform_podcast.xml');