<?php
namespace Rohit2\Tate2\Block\Employee;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Form extends Template
{
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    
    public function getFormAction()
    {
        // Replace 'employee/index/save' with the actual route and action where you want to process the form data.
        return $this->getUrl('user2/index/employee');
    }

}