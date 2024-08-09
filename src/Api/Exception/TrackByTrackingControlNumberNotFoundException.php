<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByTrackingControlNumberNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse404
     */
    private $trackV1TcnPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse404 $trackV1TcnPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1TcnPostResponse404 = $trackV1TcnPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse404
    {
        return $this->trackV1TcnPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}