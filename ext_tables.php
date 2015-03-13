<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidbootstraptheme']['setup'] = unserialize($_EXTCONF);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bootstrap Theme');

if (FALSE === (boolean) $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidbootstraptheme']['setup']['disablePageTemplates']) {
	\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidBT.Fluidbootstraptheme', 'Page');
}
if (FALSE === (boolean) $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluidbootstraptheme']['setup']['disableContentTemplates']) {
	\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidBT.Fluidbootstraptheme', 'Content');
}
