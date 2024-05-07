<?php

namespace AntibodiesOnline\FedEx;

use AntibodiesOnline\FedEx\Authorization\AccessTokenCache;
use AntibodiesOnline\FedEx\Authorization\AuthenticationManager;
use AntibodiesOnline\FedEx\Authorization\BearerAuthentication;
use AntibodiesOnline\FedEx\Plugin\AddBaseUrlPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Client\ClientInterface;

class ClientFactory
{
    public static function create(Config $config, ?AccessTokenCache $accessTokenCache = null, ?ClientInterface $httpClient = null): Client
    {
        $baseUri = Psr17FactoryDiscovery::findUriFactory()
            ->createUri($config->getEnvironmentBaseUrl());

        $authManager = new AuthenticationManager($config, $accessTokenCache);
        $plugins = [
            new AddBaseUrlPlugin($baseUri),
            new BearerAuthentication($authManager),
            new HeaderDefaultsPlugin([
                 'content-type' => 'application/json'
             ])
        ];

        if ($httpClient !== null) {
            $httpClient = new PluginClient($httpClient, $plugins);
        }

        $apiClient = Client::create($httpClient, $plugins);
        $apiClient->setAuthManager($authManager);
        $apiClient->setConfig($config);
        $authManager->setClient($apiClient);
        return $apiClient;
    }
}