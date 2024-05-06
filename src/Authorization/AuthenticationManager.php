<?php

namespace AntibodiesOnline\FedEx\Authorization;

use AntibodiesOnline\FedEx\Api\Exception\APIAuthorizationUnauthorizedException;
use AntibodiesOnline\FedEx\Api\Model\OauthTokenPostBody;
use AntibodiesOnline\FedEx\Client;
use AntibodiesOnline\FedEx\Config;
use AntibodiesOnline\FedEx\Exception\AuthenticationException;
use Exception;

class AuthenticationManager
{
    protected Config $config;

    protected Client $client;

    protected AccessTokenCache $accessTokenCache;

    public function __construct(Config $config, ?AccessTokenCache $accessTokenCache = null)
    {
        $this->config = $config;
        $this->accessTokenCache = $accessTokenCache ?? new InMemoryAccessTokenCache();
    }

    /**
     * Set Client instance on the Authentication Manager. For internal use only.
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve the access token from the cache.
     */
    public function getAccessTokenFromCache(): ?AccessToken
    {
        return $this->accessTokenCache->retrieve($this->config->getClientId());
    }

    /**
     * Request an access token either by retrieving it from the cache, or generating a new one/refreshing it.
     *
     * @param bool $skipCache Whether to ignore the cached access token if any and regenerate/refresh it.
     * @throws AuthenticationException
     */
    public function requestAccessToken(bool $skipCache = false): AccessToken
    {
        // Access token not found in cache, generate a new one and save it
        if ($skipCache || ! ($accessToken = $this->getAccessTokenFromCache())) {
            $accessToken = $this->generateToken();
            $this->accessTokenCache->save($accessToken);
            return $accessToken;
        }

        // Access token found in cache, check for expiry and refresh-ability
        if ($accessToken->hasAccessTokenExpired()) {
            $accessToken = $this->generateToken();
            $this->accessTokenCache->save($accessToken);
        }
        return $accessToken;
    }

    /**
     * Generate a new access token from the API.
     *
     * @param string|null $code If set it will attempt to generate a token using authorization_code grant type.
     * @throws AuthenticationException
     */
    protected function generateToken(?string $code = null): AccessToken
    {
        $body = (new OauthTokenPostBody())->setGrantType($this->config->getGrantType())->setClientId($this->config->getClientId())->setClientSecret($this->config->getClientSecret());

        try {
            $tokenRequestedAt = time();
            $response = $this->client->aPIAuthorization($body, ['content-type' => 'application/x-www-form-urlencoded']);
        } catch (
        APIAuthorizationUnauthorizedException $e
        ) {
            $errors = [];
            foreach ($e->getOauthTokenPostResponse401()->getErrors() as $error) {
                $errors[] = $error->getMessage();
            }
            throw new AuthenticationException(implode(' - ', $errors), 0, $e);
        } catch (Exception $e) {
            throw new AuthenticationException('Failed to retrieve an access token.', 0, $e);
        }

        $accessToken = (new AccessToken())
            ->setAccessToken($response->getAccessToken())
            ->setIssuedAt($tokenRequestedAt)
            ->setExpiresIn($response->getExpiresIn());
        return $accessToken;
    }
}