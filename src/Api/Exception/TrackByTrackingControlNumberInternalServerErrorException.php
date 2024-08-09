<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByTrackingControlNumberInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse500
     */
    private $trackV1TcnPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse500 $trackV1TcnPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1TcnPostResponse500 = $trackV1TcnPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse500
    {
        return $this->trackV1TcnPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}