<?php
namespace Rohit\Tate\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'employee_id';
    protected $_eventPrefix = 'Rohit_Tate_employee_collection';
    protected $_eventObject = 'employee_collection';

    protected function _construct()
    {
        $this->_init('Rohit\Tate\Model\Employee', 'Rohit\Tate\Model\ResourceModel\Employee');
    }
}