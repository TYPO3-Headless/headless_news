<?php
defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless News
     */
    $versionInformation = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
    if ($versionInformation->getMajorVersion() > 11) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'headless_news',
            'Configuration/TypoScript/v12',
            'Headless News For V12'
        );
    } else {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'headless_news',
            'Configuration/TypoScript',
            'Headless News'
        );
    }
});
