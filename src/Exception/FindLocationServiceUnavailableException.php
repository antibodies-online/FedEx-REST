<?php

namespace AntibodiesOnline\FedEx\Exception;

class FindLocationServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse503
     */
    private $locationV1LocationsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse503 $locationV1LocationsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->locationV1LocationsPostResponse503 = $locationV1LocationsPostResponse503;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse503() : \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse503
    {
        return $this->locationV1LocationsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}