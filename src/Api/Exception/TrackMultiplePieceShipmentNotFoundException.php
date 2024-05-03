<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackMultiplePieceShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse404
     */
    private $trackV1AssociatedshipmentsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse404 $trackV1AssociatedshipmentsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1AssociatedshipmentsPostResponse404 = $trackV1AssociatedshipmentsPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse404
    {
        return $this->trackV1AssociatedshipmentsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}