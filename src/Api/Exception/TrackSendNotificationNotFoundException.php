<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse404
     */
    private $trackV1NotificationsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse404 $trackV1NotificationsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1NotificationsPostResponse404 = $trackV1NotificationsPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse404
    {
        return $this->trackV1NotificationsPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}