<?php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['createGroup'] = 'www-data';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fileCreateMask'] = '0600';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['folderCreateMask'] = '2700';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase']['backend'] = \TYPO3\CMS\Core\Cache\Backend\ApcuBackend::class;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase']['options'] = [];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['rootline']['backend'] = \TYPO3\CMS\Core\Cache\Backend\ApcuBackend::class;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['rootline']['options'] = [];
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['hash']['backend'] = \TYPO3\CMS\Core\Cache\Backend\SimpleFileBackend::class;
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['hash']['options'] = [];
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['pages']['backend'] = \TYPO3\CMS\Core\Cache\Backend\SimpleFileBackend::class;
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['pages']['options'] = [];
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['pagesection']['backend'] = \TYPO3\CMS\Core\Cache\Backend\SimpleFileBackend::class;
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['pagesection']['options'] = [];
