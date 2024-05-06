<?php

namespace AntibodiesOnline\FedEx\Authorization;

class InMemoryAccessTokenCache extends AccessTokenCache
{
    protected ?AccessToken $accessToken = null;

    public function save(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function retrieve(string $clientId): ?AccessToken
    {
        if (
            $this->accessToken !== null &&
            $this->accessToken->hasAccessTokenExpired()
        ) {
            $this->accessToken = null;
        }
        return $this->accessToken;
    }
}