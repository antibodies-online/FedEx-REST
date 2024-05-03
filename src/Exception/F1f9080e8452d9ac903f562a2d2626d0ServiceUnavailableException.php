<?php

namespace AntibodiesOnline\FedEx\Exception;

class F1f9080e8452d9ac903f562a2d2626d0ServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse503
     */
    private $trackV1TcnPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse503 $trackV1TcnPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1TcnPostResponse503 = $trackV1TcnPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse503() : \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse503
    {
        return $this->trackV1TcnPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}