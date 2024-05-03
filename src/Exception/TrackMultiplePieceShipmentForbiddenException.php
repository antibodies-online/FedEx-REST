<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackMultiplePieceShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse403
     */
    private $trackV1AssociatedshipmentsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse403 $trackV1AssociatedshipmentsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1AssociatedshipmentsPostResponse403 = $trackV1AssociatedshipmentsPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1AssociatedshipmentsPostResponse403() : \AntibodiesOnline\FedEx\Model\TrackV1AssociatedshipmentsPostResponse403
    {
        return $this->trackV1AssociatedshipmentsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}