<?php
namespace TNW\Stripe\Controller\Adminhtml\PaymentIntent\Create;

/**
 * Interceptor class for @see \TNW\Stripe\Controller\Adminhtml\PaymentIntent\Create
 */
class Interceptor extends \TNW\Stripe\Controller\Adminhtml\PaymentIntent\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Session\Quote $checkoutSession, \TNW\Stripe\Model\CreatePaymentIntent $createPaymentIntent)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $createPaymentIntent);
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
