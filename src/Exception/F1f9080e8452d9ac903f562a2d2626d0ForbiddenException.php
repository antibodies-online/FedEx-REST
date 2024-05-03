<?php

namespace AntibodiesOnline\FedEx\Exception;

class F1f9080e8452d9ac903f562a2d2626d0ForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse403
     */
    private $trackV1TcnPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse403 $trackV1TcnPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1TcnPostResponse403 = $trackV1TcnPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1TcnPostResponse403() : \AntibodiesOnline\FedEx\Model\TrackV1TcnPostResponse403
    {
        return $this->trackV1TcnPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}