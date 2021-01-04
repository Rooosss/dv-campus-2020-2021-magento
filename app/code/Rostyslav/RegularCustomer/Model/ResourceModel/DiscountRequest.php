<?php

declare(strict_types=1);

namespace Rostyslav\RegularCustomer\Model\ResourceModel;

class DiscountRequest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        $this->_init('rostyslav_discount_regular_customer', 'request_id');
    }
}
