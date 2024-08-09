<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CheckFreightPickupAvailabilityServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse503
     */
    private $pickupV1FreightPickupsAvailabilitiesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse503 $pickupV1FreightPickupsAvailabilitiesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1FreightPickupsAvailabilitiesPostResponse503 = $pickupV1FreightPickupsAvailabilitiesPostResponse503;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsAvailabilitiesPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse503
    {
        return $this->pickupV1FreightPickupsAvailabilitiesPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}