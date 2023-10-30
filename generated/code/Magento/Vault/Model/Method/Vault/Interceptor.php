<?php
namespace Magento\Vault\Model\Method\Vault;

/**
 * Interceptor class for @see \Magento\Vault\Model\Method\Vault
 */
class Interceptor extends \Magento\Vault\Model\Method\Vault implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Payment\Gateway\ConfigInterface $config, \Magento\Payment\Gateway\ConfigFactoryInterface $configFactory, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Payment\Model\MethodInterface $vaultProvider, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Payment\Gateway\Config\ValueHandlerPoolInterface $valueHandlerPool, \Magento\Payment\Gateway\Command\CommandManagerPoolInterface $commandManagerPool, \Magento\Vault\Api\PaymentTokenManagementInterface $tokenManagement, \Magento\Sales\Api\Data\OrderPaymentExtensionInterfaceFactory $paymentExtensionFactory, $code, ?\Magento\Framework\Serialize\Serializer\Json $jsonSerializer = null)
    {
        $this->___init();
        parent::__construct($config, $configFactory, $objectManager, $vaultProvider, $eventManager, $valueHandlerPool, $commandManagerPool, $tokenManagement, $paymentExtensionFactory, $code, $jsonSerializer);
    }

    /**
     * {@inheritdoc}
     */
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorize');
        return $pluginInfo ? $this->___callPlugins('authorize', func_get_args(), $pluginInfo) : parent::authorize($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture($payment, $amount);
    }
}
