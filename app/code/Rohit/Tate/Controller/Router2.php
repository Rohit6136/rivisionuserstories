<?php
namespace Rohit\Tate\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;

/**
 * Class Router
 */
class Router2 implements RouterInterface
{
    protected $actionFactory;
    protected $response;
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }
    public function match(RequestInterface $request): ?ActionInterface
    {
        // Get the requested URL
        $identifier = trim($request->getPathInfo(), '/');
        dump($identifier);
        dump(strpos($identifier, 'contactuspage.html'));
    
        // Check if the requested URL contains 'contactuspage.html'
        if (strpos($identifier, 'contactuspage.html') === false) {
            // If the URL contains 'contactuspage.html', redirect to the Contact Us page
            $request->setModuleName('contact')->setControllerName('index')->setActionName('index');
            dump($request);
            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }
    
        // Handle 404 errors by checking other conditions or URLs
    
        return null;
    }
}