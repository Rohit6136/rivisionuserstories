<?php

namespace Rohit2\Tate2\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Catalog\Model\Product;

class Button extends Template
{
    protected $product;
    protected $productRepository;
    protected $registry;

    public function __construct(
        Context $context,
        Product $product,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Registry $registry
    ) {
        $this->registry = $registry;
        $this->product = $product;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }

    public function disableProduct($id)
    {
        $product = $this->productRepository->getById($id);
        $product->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_DISABLED);
        $this->productRepository->save($product);

    }
}