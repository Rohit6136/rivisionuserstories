<?php
namespace TNW\Stripe\Controller\Adminhtml\StoredCards\Delete;

/**
 * Interceptor class for @see \TNW\Stripe\Controller\Adminhtml\StoredCards\Delete
 */
class Interceptor extends \TNW\Stripe\Controller\Adminhtml\StoredCards\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \TNW\Stripe\Api\StoredCardsManagementInterface $cardsManagement)
    {
        $this->___init();
        parent::__construct($context, $cardsManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
