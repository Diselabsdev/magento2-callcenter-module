<?php

namespace CallCenter\Integration\Model;

use CallCenter\Integration\Api\Data\TokenInterface;
use Magento\Framework\DataObject;

class Token extends DataObject implements TokenInterface
{
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->getData('token');
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        return $this->setData('token', $token);
    }

    /**
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->getData('expires_at');
    }

    /**
     * @param string $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        return $this->setData('expires_at', $expiresAt);
    }
} 