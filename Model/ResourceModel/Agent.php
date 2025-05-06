<?php

namespace CallCenter\Integration\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Agent extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('callcenter_agents', 'agent_id');
    }
} 