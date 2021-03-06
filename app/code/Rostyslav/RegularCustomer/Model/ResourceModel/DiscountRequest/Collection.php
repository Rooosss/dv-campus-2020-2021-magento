<?php

declare(strict_types=1);

namespace Rostyslav\RegularCustomer\Model\ResourceModel\DiscountRequest;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->_init(
            \Rostyslav\RegularCustomer\Model\DiscountRequest::class,
            \Rostyslav\RegularCustomer\Model\ResourceModel\DiscountRequest::class
        );
    }
}
