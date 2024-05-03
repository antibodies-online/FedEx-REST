<?php

namespace AntibodiesOnline\FedEx\Authorization;

use DateTime;
use DateTimeZone;

class AccessToken
{
    protected string $accessToken;

    protected int $issuedAt;

    protected int $expiresIn;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getIssuedAt(): int
    {
        return $this->issuedAt;
    }

    public function setIssuedAt(int $issuedAt): self
    {
        $this->issuedAt = $issuedAt;
        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    public function hasAccessTokenExpired(): bool
    {
        $now = new DateTime('now', new DateTimeZone('UTC'));
        // Avoid access token expiring mid-request by marking it as expired 60s before.
        return ($this->getIssuedAt() + $this->getExpiresIn() - 60) < $now->getTimestamp();
    }

}