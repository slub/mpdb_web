<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    $extensionKey = 'mpdb_web';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Music Publisher Database Template'
    );
});
