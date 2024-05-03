<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckFreightPickupAvailabilityBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse400
     */
    private $pickupV1FreightPickupsAvailabilitiesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse400 $pickupV1FreightPickupsAvailabilitiesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1FreightPickupsAvailabilitiesPostResponse400 = $pickupV1FreightPickupsAvailabilitiesPostResponse400;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsAvailabilitiesPostResponse400() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse400
    {
        return $this->pickupV1FreightPickupsAvailabilitiesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}