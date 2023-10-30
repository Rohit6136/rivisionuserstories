<?php
namespace TNW\Stripe\Controller\PaymentIntent\Create;

/**
 * Interceptor class for @see \TNW\Stripe\Controller\PaymentIntent\Create
 */
class Interceptor extends \TNW\Stripe\Controller\PaymentIntent\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $session, \Magento\Checkout\Model\Session $checkoutSession, \TNW\Stripe\Model\CreatePaymentIntent $createPaymentIntent)
    {
        $this->___init();
        parent::__construct($context, $session, $checkoutSession, $createPaymentIntent);
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
