<?php
namespace Rohit2\Tate2\Block\Employee;

use Magento\Framework\View\Element\Template;
use Rohit\Tate\Model\ResourceModel\Employee\Collection;

class Table extends Template
{
    protected $employeeCollection;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Collection $employeeCollection
    ) {
        parent::__construct($context);
        $this->employeeCollection = $employeeCollection;
    }

    public function getEmployeeCollection()
    {
        return $this->employeeCollection->getItems();
    }
}