<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless News
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'headless_news',
        'Configuration/TypoScript',
        'Headless News'
    );
});
