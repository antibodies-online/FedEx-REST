<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackMultiplePieceShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse401
     */
    private $trackV1AssociatedshipmentsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse401 $trackV1AssociatedshipmentsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1AssociatedshipmentsPostResponse401 = $trackV1AssociatedshipmentsPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\TrackV1AssociatedshipmentsPostResponse401
    {
        return $this->trackV1AssociatedshipmentsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}