<?php

namespace AntibodiesOnline\FedEx\Exception;

class APIAuthorizationInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse500
     */
    private $oauthTokenPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\OauthTokenPostResponse500 $oauthTokenPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->oauthTokenPostResponse500 = $oauthTokenPostResponse500;
        $this->response = $response;
    }
    public function getOauthTokenPostResponse500() : \AntibodiesOnline\FedEx\Model\OauthTokenPostResponse500
    {
        return $this->oauthTokenPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}