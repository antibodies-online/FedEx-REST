<?php

namespace AntibodiesOnline\FedEx\Authorization;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

class BearerAuthentication implements Plugin
{
    protected AuthenticationManager $authManager;

    public function __construct(AuthenticationManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        if($request->getUri()->getPath() === '/oauth/token') {
            return $next($request);
        }
        $accessToken = $this->authManager->requestAccessToken();
        return $next($request->withHeader('Authorization', 'Bearer ' . $accessToken->getAccessToken()));
    }
}