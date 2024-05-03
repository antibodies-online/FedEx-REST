<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse401
     */
    private $trackV1NotificationsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse401 $trackV1NotificationsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1NotificationsPostResponse401 = $trackV1NotificationsPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse401
    {
        return $this->trackV1NotificationsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}