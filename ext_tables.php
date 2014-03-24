<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bootstrap Theme');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Settings', 'Bootstrap Theme settings');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('fluidbootstraptheme', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('fluidbootstraptheme', 'Content');