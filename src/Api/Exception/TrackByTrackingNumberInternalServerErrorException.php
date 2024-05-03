<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByTrackingNumberInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse500
     */
    private $trackV1TrackingnumbersPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse500 $trackV1TrackingnumbersPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1TrackingnumbersPostResponse500 = $trackV1TrackingnumbersPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1TrackingnumbersPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse500
    {
        return $this->trackV1TrackingnumbersPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}