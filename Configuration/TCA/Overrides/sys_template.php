<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function () {
    ExtensionManagementUtility::addStaticFile(
        'headless_news',
        'Configuration/TypoScript',
        'Headless News'
    );
})();
