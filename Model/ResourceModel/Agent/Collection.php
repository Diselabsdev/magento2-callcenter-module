<?php

namespace CallCenter\Integration\Model\ResourceModel\Agent;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \CallCenter\Integration\Model\Agent::class,
            \CallCenter\Integration\Model\ResourceModel\Agent::class
        );
    }
} 