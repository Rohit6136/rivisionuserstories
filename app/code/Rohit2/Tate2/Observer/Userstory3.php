<?php
namespace Rohit2\Tate2\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Userstory3 implements ObserverInterface{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer){
        $product = $observer->getProduct();
        $productName= $product->getName();
        $this->logger->info("product name:". $productName);
    }
}