<?php

namespace Rohit\Tate\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Rohit\Tate\Block\Test;

class MyController extends Action
{
    protected $Test;

    public function __construct(Context $context, Test $Test)
    {
        parent::__construct($context);
        $this->Test = $Test;
    }

    public function execute()
    {
        // Call the displayParams() method of MyTest
        $this->Test->displayParams();
    }
}
