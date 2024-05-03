<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckPickupAvailabilityInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse500
     */
    private $pickupV1PickupsAvailabilitiesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse500 $pickupV1PickupsAvailabilitiesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1PickupsAvailabilitiesPostResponse500 = $pickupV1PickupsAvailabilitiesPostResponse500;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse500() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse500
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}