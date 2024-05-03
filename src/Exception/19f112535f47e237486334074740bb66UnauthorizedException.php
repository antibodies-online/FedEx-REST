<?php

namespace AntibodiesOnline\FedEx\Exception;

class 19f112535f47e237486334074740bb66UnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse401
     */
    private $trackV1NotificationsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse401 $trackV1NotificationsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1NotificationsPostResponse401 = $trackV1NotificationsPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1NotificationsPostResponse401() : \AntibodiesOnline\FedEx\Model\TrackV1NotificationsPostResponse401
    {
        return $this->trackV1NotificationsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}