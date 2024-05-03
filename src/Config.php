<?php

namespace AntibodiesOnline\FedEx;

class Config
{
    public const URL_PRODUCTION = 'https://apis.fedex.com';
    public const URL_SANDBOX = 'https://apis-sandbox.fedex.com';

    public const GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';
    public const GRANT_TYPE_CSP_CREDENTIALS = 'csp_credentials';
    public const GRANT_TYPE_CLIENT_PC_CREDENTIALS = 'client_pc_credentials';

    private bool $useTestingEnvironment;

    private string $grantType;

    private string $clientId;

    private string $clientSecret;

    public function __construct(array $config)
    {
        $this->grantType = $config['grant_type'] ?? self::GRANT_TYPE_CLIENT_CREDENTIALS;
        if ( ! in_array($this->grantType, [self::GRANT_TYPE_CLIENT_CREDENTIALS, self::GRANT_TYPE_CSP_CREDENTIALS, self::GRANT_TYPE_CLIENT_PC_CREDENTIALS])) {
            throw new \InvalidArgumentException("Invalid grant_type: $this->grantType");
        }
        if (empty($config['client_id'])) {
            throw new \InvalidArgumentException('Missing required parameter: client_id');
        }
        if (empty($config['client_secret'])) {
            throw new \InvalidArgumentException('Missing required parameter: client_secret');
        }
        $this->useTestingEnvironment = $config['use_testing_environment'] ?? false;
        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
    }

    public function isUseTestingEnvironment(): bool
    {
        return $this->useTestingEnvironment;
    }

    public function setUseTestingEnvironment(bool $useTestingEnvironment): self
    {
        $this->useTestingEnvironment = $useTestingEnvironment;
        return $this;
    }

    public function getGrantType(): string
    {
        return $this->grantType;
    }

    public function setGrantType(string $grantType): self
    {
        $this->grantType = $grantType;
        return $this;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    public function getEnvironmentBaseUrl(): string
    {
        return $this->isUseTestingEnvironment() ? self::URL_SANDBOX : self::URL_PRODUCTION;
    }
}