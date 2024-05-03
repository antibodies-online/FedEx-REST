<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckPickupAvailabilityServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse503
     */
    private $pickupV1PickupsAvailabilitiesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse503 $pickupV1PickupsAvailabilitiesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1PickupsAvailabilitiesPostResponse503 = $pickupV1PickupsAvailabilitiesPostResponse503;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse503() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse503
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}