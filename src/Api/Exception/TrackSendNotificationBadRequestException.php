<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse400
     */
    private $trackV1NotificationsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse400 $trackV1NotificationsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1NotificationsPostResponse400 = $trackV1NotificationsPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse400
    {
        return $this->trackV1NotificationsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}