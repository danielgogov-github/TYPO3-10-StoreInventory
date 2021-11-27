<?php

namespace T10\StoreInventory\Controller;

use T10\StoreInventory\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class StoreInventoryController extends ActionController
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @param \T10\StoreInventory\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }
}
