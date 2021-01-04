<?php

declare(strict_types=1);

namespace Rostyslav\RegularCustomer\Model;

class DiscountRequest extends \Magento\Framework\Model\AbstractModel
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->_init(\Rostyslav\RegularCustomer\Model\ResourceModel\DiscountRequest::class);
    }
}
