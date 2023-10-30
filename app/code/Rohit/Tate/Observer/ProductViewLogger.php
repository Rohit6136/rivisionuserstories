<?php
namespace Rohit\Tate\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class ProductViewLogger implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        // dump($observer->getEvent());
        $product = $observer->getProduct();
        $productName = $product->getName();
        $this->logger->info('Product Viewed: ' . $productName);
    }
}
