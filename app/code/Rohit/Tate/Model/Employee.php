<?php
namespace Rohit\Tate\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Rohit\Tate\Model\ResourceModel\Employee');
    }
}