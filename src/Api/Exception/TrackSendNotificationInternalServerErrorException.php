<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackSendNotificationInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse500
     */
    private $trackV1NotificationsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse500 $trackV1NotificationsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1NotificationsPostResponse500 = $trackV1NotificationsPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\TrackV1NotificationsPostResponse500
    {
        return $this->trackV1NotificationsPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}