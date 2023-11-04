<?php
namespace Rohit2\Tate2\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RouterListInterface;
use Psr\Log\LoggerInterface;

class RouterLogger implements ObserverInterface
{
    protected $routerList;
    protected $logger;

    public function __construct(RouterListInterface $routerList, LoggerInterface $logger)
    {
        $this->routerList = $routerList;
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $routers = [];
        foreach ($this->routerList as $router) {
            $routers[] = get_class($router);
        }

        $this->logger->info('List of Routers: ' . implode(', ', $routers));
    }
}
