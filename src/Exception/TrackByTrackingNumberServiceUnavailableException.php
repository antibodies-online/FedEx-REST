<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackByTrackingNumberServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse503
     */
    private $trackV1TrackingnumbersPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse503 $trackV1TrackingnumbersPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1TrackingnumbersPostResponse503 = $trackV1TrackingnumbersPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1TrackingnumbersPostResponse503() : \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse503
    {
        return $this->trackV1TrackingnumbersPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}