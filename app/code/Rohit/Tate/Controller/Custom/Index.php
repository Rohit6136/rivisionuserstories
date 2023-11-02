<?php
namespace Rohit\Tate\Controller\Custom;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Rohit\Tate\Block\CustomBlock;

class Index extends Action
{
    protected $PageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $PageFactory
    ) {
        parent::__construct($context);
        $this->PageFactory = $PageFactory;
    }

    public function execute()
    {
        return $this->PageFactory->create();
    }
}
