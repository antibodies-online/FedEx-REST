<?php

namespace AntibodiesOnline\FedEx\Exception;

class APIAuthorizationUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse401
     */
    private $oauthTokenPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\OauthTokenPostResponse401 $oauthTokenPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->oauthTokenPostResponse401 = $oauthTokenPostResponse401;
        $this->response = $response;
    }
    public function getOauthTokenPostResponse401() : \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse401
    {
        return $this->oauthTokenPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}