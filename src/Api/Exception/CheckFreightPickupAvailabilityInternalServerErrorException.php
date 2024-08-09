<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CheckFreightPickupAvailabilityInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse500
     */
    private $pickupV1FreightPickupsAvailabilitiesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse500 $pickupV1FreightPickupsAvailabilitiesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1FreightPickupsAvailabilitiesPostResponse500 = $pickupV1FreightPickupsAvailabilitiesPostResponse500;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsAvailabilitiesPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsAvailabilitiesPostResponse500
    {
        return $this->pickupV1FreightPickupsAvailabilitiesPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}