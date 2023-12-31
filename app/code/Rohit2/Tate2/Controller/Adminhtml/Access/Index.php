<?php
namespace Rohit2\Tate2\Controller\Adminhtml\Access;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Index extends Action
{
    public function execute()
    {
        $access = $this->getRequest()->getParam('access');
        if ($access === 'True') {
            echo 'Admin Controller Access Granted';
        } else {
            echo 'Access Denied';
        }
    }
}