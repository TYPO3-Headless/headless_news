<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless News
     */
    ExtensionManagementUtility::addStaticFile(
        'headless_news',
        'Configuration/TypoScript',
        'Headless News'
    );
});
