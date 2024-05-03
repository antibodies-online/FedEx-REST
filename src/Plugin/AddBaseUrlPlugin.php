<?php

namespace AntibodiesOnline\FedEx\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class AddBaseUrlPlugin implements Plugin
{
    protected UriInterface $baseUri;

    public function __construct(UriInterface $uri)
    {
        $this->baseUri = $uri;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $basePath = $this->baseUri->getPath();
        $path = $request->getUri()->getPath();

        $uri = $request->getUri()
            ->withScheme($this->baseUri->getScheme())
            ->withHost($this->baseUri->getHost())
            ->withPort($this->baseUri->getPort())
            ->withPath($path)
        ;
        return $next($request->withUri($uri));
    }
}