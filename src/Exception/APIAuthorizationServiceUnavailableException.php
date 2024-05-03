<?php

namespace AntibodiesOnline\FedEx\Exception;

class APIAuthorizationServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse503
     */
    private $oauthTokenPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\OauthTokenPostResponse503 $oauthTokenPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->oauthTokenPostResponse503 = $oauthTokenPostResponse503;
        $this->response = $response;
    }
    public function getOauthTokenPostResponse503() : \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse503
    {
        return $this->oauthTokenPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}