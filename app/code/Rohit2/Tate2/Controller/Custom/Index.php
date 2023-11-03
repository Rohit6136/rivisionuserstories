<?php
namespace Rohit2\Tate2\Controller\Custom;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $block = $resultPage->getLayout()->createBlock(\Rohit\Tate\Block\CustomBlock::class);
        // $resultPage->getLayout()->setChild('content', 'custom_block', $block);
        
        return $resultPage;
    }
}
