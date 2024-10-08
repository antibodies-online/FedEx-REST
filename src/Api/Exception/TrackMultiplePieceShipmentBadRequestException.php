<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackMultiplePieceShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse400
     */
    private $trackV1AssociatedshipmentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse400 $trackV1AssociatedshipmentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1AssociatedshipmentsPostResponse400 = $trackV1AssociatedshipmentsPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse400
    {
        return $this->trackV1AssociatedshipmentsPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}