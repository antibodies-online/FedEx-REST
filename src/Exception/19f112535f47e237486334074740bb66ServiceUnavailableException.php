<?php

namespace AntibodiesOnline\FedEx\Exception;

class 19f112535f47e237486334074740bb66ServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse503
     */
    private $trackV1NotificationsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse503 $trackV1NotificationsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1NotificationsPostResponse503 = $trackV1NotificationsPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse503() : \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse503
    {
        return $this->trackV1NotificationsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}