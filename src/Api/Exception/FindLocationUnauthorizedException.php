<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FindLocationUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse401
     */
    private $locationV1LocationsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse401 $locationV1LocationsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->locationV1LocationsPostResponse401 = $locationV1LocationsPostResponse401;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse401
    {
        return $this->locationV1LocationsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}