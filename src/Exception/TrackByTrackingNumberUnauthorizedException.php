<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackByTrackingNumberUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse401
     */
    private $trackV1TrackingnumbersPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse401 $trackV1TrackingnumbersPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1TrackingnumbersPostResponse401 = $trackV1TrackingnumbersPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1TrackingnumbersPostResponse401() : \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse401
    {
        return $this->trackV1TrackingnumbersPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}