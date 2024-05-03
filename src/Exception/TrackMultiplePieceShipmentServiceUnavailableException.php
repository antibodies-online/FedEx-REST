<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackMultiplePieceShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse503
     */
    private $trackV1AssociatedshipmentsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse503 $trackV1AssociatedshipmentsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1AssociatedshipmentsPostResponse503 = $trackV1AssociatedshipmentsPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse503() : \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse503
    {
        return $this->trackV1AssociatedshipmentsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}