<?php
namespace Rohit2\Tate2\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
//     protected $_idFieldName = 'employee_id2';
//     protected $_eventPrefix = 'Rohit2_Tate2_employee_collection';
//     protected $_eventObject = 'employee_collection';

    protected function _construct()
    {
        $this->_init('Rohit2\Tate2\Model\Employee', 'Rohit2\Tate2\Model\ResourceModel\Employee');
    }
}