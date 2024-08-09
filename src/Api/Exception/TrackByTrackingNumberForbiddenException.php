<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByTrackingNumberForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse403
     */
    private $trackV1TrackingnumbersPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse403 $trackV1TrackingnumbersPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1TrackingnumbersPostResponse403 = $trackV1TrackingnumbersPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1TrackingnumbersPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingnumbersPostResponse403
    {
        return $this->trackV1TrackingnumbersPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}