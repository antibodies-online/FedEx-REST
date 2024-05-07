<?php

namespace AntibodiesOnline\FedEx;

use AntibodiesOnline\FedEx\Api\Client as BaseClient;
use AntibodiesOnline\FedEx\Authorization\AuthenticationManager;

class Client extends BaseClient
{
    protected AuthenticationManager $authManager;

    protected Config $config;

    /**
     * Set Config instance on the client. For internal use only.
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Retrieve the Config object that was used to instantiate this client instance.
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * Set Authentication Manager instance on the client. For internal use only.
     */
    public function setAuthManager(AuthenticationManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function authorize()
    {
        $this->authManager->requestAccessToken();
    }

    public function getAuthManager(): AuthenticationManager
    {
        return $this->authManager;
    }
}