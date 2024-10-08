<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackMultiplePieceShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse500
     */
    private $trackV1AssociatedshipmentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse500 $trackV1AssociatedshipmentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1AssociatedshipmentsPostResponse500 = $trackV1AssociatedshipmentsPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse500
    {
        return $this->trackV1AssociatedshipmentsPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}