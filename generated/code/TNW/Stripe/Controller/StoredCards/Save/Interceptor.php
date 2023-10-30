<?php
namespace TNW\Stripe\Controller\StoredCards\Save;

/**
 * Interceptor class for @see \TNW\Stripe\Controller\StoredCards\Save
 */
class Interceptor extends \TNW\Stripe\Controller\StoredCards\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $session, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \TNW\Stripe\Api\StoredCardsManagementInterface $storedCardsManagement)
    {
        $this->___init();
        parent::__construct($session, $request, $resultFactory, $storedCardsManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
