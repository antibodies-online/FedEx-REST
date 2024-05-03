<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckFreightPickupAvailabilityForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse403
     */
    private $pickupV1FreightPickupsAvailabilitiesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse403 $pickupV1FreightPickupsAvailabilitiesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1FreightPickupsAvailabilitiesPostResponse403 = $pickupV1FreightPickupsAvailabilitiesPostResponse403;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsAvailabilitiesPostResponse403() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsAvailabilitiesPostResponse403
    {
        return $this->pickupV1FreightPickupsAvailabilitiesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}