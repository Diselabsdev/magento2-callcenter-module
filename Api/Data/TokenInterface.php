<?php

namespace CallCenter\Integration\Api\Data;

interface TokenInterface
{
    /**
     * @return string
     */
    public function getToken();

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token);

    /**
     * @return string
     */
    public function getExpiresAt();

    /**
     * @param string $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt);
} 