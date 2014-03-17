<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bootstrap Theme');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Settings', 'Bootstrap Theme settings');

Tx_Flux_Core::registerProviderExtensionKey('themebootstrap', 'Page');
Tx_Flux_Core::registerProviderExtensionKey('themebootstrap', 'Content');