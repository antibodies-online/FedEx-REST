<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse403
     */
    private $trackV1NotificationsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse403 $trackV1NotificationsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1NotificationsPostResponse403 = $trackV1NotificationsPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse403
    {
        return $this->trackV1NotificationsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}