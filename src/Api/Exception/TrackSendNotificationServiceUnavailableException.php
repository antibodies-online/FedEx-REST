<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse503
     */
    private $trackV1NotificationsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse503 $trackV1NotificationsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1NotificationsPostResponse503 = $trackV1NotificationsPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse503
    {
        return $this->trackV1NotificationsPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}