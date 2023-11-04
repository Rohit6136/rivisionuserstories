<?php
namespace Rohit2\Tate2\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Rohit2\Tate2\Model\ResourceModel\Employee');
    }
}