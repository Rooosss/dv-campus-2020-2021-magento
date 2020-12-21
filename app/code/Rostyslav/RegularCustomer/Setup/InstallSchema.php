<?php

declare(strict_types=1);

namespace Rostyslav\RegularCustomer\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context): void
    {
        $setup->startSetup();

        /**
         * Create table 'rostyslav_discount_regular_customer'
         */
        $table = $setup->getConnection()
            ->newTable(
                $setup->getTable('rostyslav_discount_regular_customer')
            )->addColumn(
                'request_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Request ID'
            )->addColumn(
                'customer_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => true],
                'Customer Id'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['unsigned' => true, 'nullable' => false],
                'Name'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['unsigned' => true, 'nullable' => false],
                'Email'
            )->addColumn(
                'website_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => true],
                'Website Id'
            )->addColumn(
                'admin_user_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => true],
                'User Id'
            )->addIndex(
                $setup->getIdxName('rostyslav_discount_regular_customer', ['website_id']),
                ['website_id']
            )->addIndex(
                $setup->getIdxName(
                    'rostyslav_discount_regular_customer',
                    ['email', 'website_id'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
                ),
                ['email', 'website_id'],
                ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
            )->addForeignKey(
                $setup->getFkName('rostyslav_discount_regular_customer', 'website_id', 'store_website', 'website_id'),
                'website_id',
                $setup->getTable('store_website'),
                'website_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_SET_NULL
            )->addIndex(
                $setup->getIdxName('rostyslav_discount_regular_customer_request', ['customer_id']),
                ['customer_id']
            )->addForeignKey(
                $setup->getFkName('rostyslav_discount_regular_customer', 'customer_id', 'customer_entity', 'entity_id'),
                'customer_id',
                $setup->getTable('customer_entity'),
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_SET_NULL
            )->setComment(
                'Regular Customer'
            );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
