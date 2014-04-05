<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bootstrap Theme');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Settings', 'Bootstrap Theme settings');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidBT.Fluidbootstraptheme', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidBT.Fluidbootstraptheme', 'Content');
