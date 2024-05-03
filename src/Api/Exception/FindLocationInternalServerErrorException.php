<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FindLocationInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse500
     */
    private $locationV1LocationsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse500 $locationV1LocationsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->locationV1LocationsPostResponse500 = $locationV1LocationsPostResponse500;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse500
    {
        return $this->locationV1LocationsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}