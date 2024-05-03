<?php

namespace AntibodiesOnline\FedEx\Exception;

class 19f112535f47e237486334074740bb66BadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse400
     */
    private $trackV1NotificationsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse400 $trackV1NotificationsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1NotificationsPostResponse400 = $trackV1NotificationsPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse400() : \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse400
    {
        return $this->trackV1NotificationsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}