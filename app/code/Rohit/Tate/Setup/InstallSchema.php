<?php
namespace Rohit\Tate\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('employee_table')
        )->addColumn(
            'employee_id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Employee ID'
        )->addColumn(
            'first_name',
            Table::TYPE_TEXT,
            30,
            ['nullable' => false],
            'First Name'
        )->addColumn(
            'last_name',
            Table::TYPE_TEXT,
            30,
            ['nullable' => false],
            'Last Name'
        )->addColumn(
            'email_id',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Email ID'
        )->addColumn(
            'address',
            Table::TYPE_TEXT,
            255,
            ['nullable' => true],
            'Address'
        )->addConstraint(
            $installer->getIdxName(
                'employee_table',
                ['first_name'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
            ),
            ['first_name'],
            ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
        )->addConstraint(
            $installer->getIdxName(
                'employee_table',
                ['last_name'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
            ),
            ['last_name'],
            ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
        )->setComment('Employee Table');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
