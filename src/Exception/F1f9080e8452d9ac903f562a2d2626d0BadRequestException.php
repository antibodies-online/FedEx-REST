<?php

namespace AntibodiesOnline\FedEx\Exception;

class F1f9080e8452d9ac903f562a2d2626d0BadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse400
     */
    private $trackV1TcnPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse400 $trackV1TcnPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1TcnPostResponse400 = $trackV1TcnPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse400() : \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse400
    {
        return $this->trackV1TcnPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}