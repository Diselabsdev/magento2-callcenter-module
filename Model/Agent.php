<?php

namespace CallCenter\Integration\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Agent extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'callcenter_agent';

    protected function _construct()
    {
        $this->_init(\CallCenter\Integration\Model\ResourceModel\Agent::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
} 