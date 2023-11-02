<?php
namespace Rohit\Tate\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
// use Magento\Framework\App\ResponseInterface;
use Psr\Log\LoggerInterface;

class HtmlLogger implements ObserverInterface
{
    protected $logger;
    // protected $response;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $html=$observer->getEvent()->getData("response")->getBody();

        $this->logger->info('HTML of Page: ' . $html);
    }
}
