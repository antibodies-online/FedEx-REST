<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CheckFreightPickupAvailabilityUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse401
     */
    private $pickupV1FreightPickupsAvailabilitiesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse401 $pickupV1FreightPickupsAvailabilitiesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1FreightPickupsAvailabilitiesPostResponse401 = $pickupV1FreightPickupsAvailabilitiesPostResponse401;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsAvailabilitiesPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse401
    {
        return $this->pickupV1FreightPickupsAvailabilitiesPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}