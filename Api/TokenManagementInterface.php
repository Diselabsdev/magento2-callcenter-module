<?php

namespace CallCenter\Integration\Api;

interface TokenManagementInterface
{
    /**
     * Create API token for call center integration
     *
     * @param string $username
     * @param string $password
     * @return \CallCenter\Integration\Api\Data\TokenInterface
     * @throws \Magento\Framework\Exception\AuthenticationException
     */
    public function createToken($username, $password);
} 