<?php
namespace TNW\Stripe\Console\Command\GuestOrder;

/**
 * Interceptor class for @see \TNW\Stripe\Console\Command\GuestOrder
 */
class Interceptor extends \TNW\Stripe\Console\Command\GuestOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\State $appState, ?string $name = null)
    {
        $this->___init();
        parent::__construct($objectManager, $appState, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
