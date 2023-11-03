<?php
namespace Rohit\Tate\Controller\Custom;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{
    protected $actionFactory;

    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }
    public function match(RequestInterface $request): ?ActionInterface
    {
        $identifier = trim($request->getPathInfo(), '/');
        $urlParts = explode('/', $identifier);

        // Ensure that the URL structure matches the expected format
        if (count($urlParts) === 1) {
            $url = $urlParts[0];
            
            // Extract individual parts using regex pattern
            if (preg_match('/^([A-Z][a-z]+)([A-Z][a-z]+)([A-Z][a-z]+)$/', $url, $matches)) {
                $moduleName = strtolower($matches[1]);
                $controllerName = strtolower($matches[2]);
                $actionName = strtolower($matches[3]);
                
                $request->setModuleName($moduleName)
                        ->setControllerName($controllerName)
                        ->setActionName($actionName);

                return $this->actionFactory->create(\Magento\Framework\App\Action\Forward::class, ['request' => $request]);
            }
        }
        return null;
    }
}