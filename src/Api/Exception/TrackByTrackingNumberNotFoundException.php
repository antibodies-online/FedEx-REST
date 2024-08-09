<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByTrackingNumberNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse404
     */
    private $trackV1TrackingnumbersPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse404 $trackV1TrackingnumbersPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1TrackingnumbersPostResponse404 = $trackV1TrackingnumbersPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1TrackingnumbersPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse404
    {
        return $this->trackV1TrackingnumbersPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}