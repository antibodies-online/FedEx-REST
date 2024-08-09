<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class OauthTokenPostResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     *
     * @var string
     */
    protected $accessToken;
    /**
     * This is a token type. In this case, it is 'bearer authentication'.
     *
     * @var string
     */
    protected $tokenType;
    /**
     * Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     *
     * @var int
     */
    protected $expiresIn;
    /**
     * Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     *
     * @var string
     */
    protected $scope;
    /**
     * This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     *
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
    /**
     * This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * This is a token type. In this case, it is 'bearer authentication'.
     *
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }
    /**
     * This is a token type. In this case, it is 'bearer authentication'.
     *
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(string $tokenType): self
    {
        $this->initialized['tokenType'] = true;
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
    /**
     * Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     *
     * @param int $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(int $expiresIn): self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
    /**
     * Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }
    /**
     * Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
}