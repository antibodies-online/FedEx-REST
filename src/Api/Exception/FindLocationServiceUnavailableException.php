<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FindLocationServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse503
     */
    private $locationV1LocationsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse503 $locationV1LocationsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->locationV1LocationsPostResponse503 = $locationV1LocationsPostResponse503;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse503
    {
        return $this->locationV1LocationsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}