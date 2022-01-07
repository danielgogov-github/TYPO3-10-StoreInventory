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

// Icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconsStoreInventory = [
    'storeInventory-cart' => 'Cart.svg',
];
foreach ($iconsStoreInventory as $identifier => $icon) {
    $iconRegistry->registerIcon(
        $identifier, // $identifier
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, // $iconProviderClassName
        ['source' => 'EXT:store_inventory/Resources/Public/Icons/'. $icon], // array $options
    );
}
