<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T10.StoreInventory', // vendorName $extensionName
    'InventoryList', // $pluginName
    [
        \T10\StoreInventory\Controller\StoreInventoryController::class => 'list', // array $controllerActions
    ],
    [
        \T10\StoreInventory\Controller\StoreInventoryController::class => '', // array $nonCacheableControllerActions = []
    ]
);
