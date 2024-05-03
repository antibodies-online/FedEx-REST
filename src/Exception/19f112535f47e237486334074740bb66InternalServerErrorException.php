<?php

namespace AntibodiesOnline\FedEx\Exception;

class 19f112535f47e237486334074740bb66InternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse500
     */
    private $trackV1NotificationsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse500 $trackV1NotificationsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1NotificationsPostResponse500 = $trackV1NotificationsPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse500() : \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse500
    {
        return $this->trackV1NotificationsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}