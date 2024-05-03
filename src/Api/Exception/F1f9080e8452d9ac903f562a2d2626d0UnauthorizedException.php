<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class F1f9080e8452d9ac903f562a2d2626d0UnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse401
     */
    private $trackV1TcnPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse401 $trackV1TcnPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1TcnPostResponse401 = $trackV1TcnPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\TrackV1TcnPostResponse401
    {
        return $this->trackV1TcnPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}