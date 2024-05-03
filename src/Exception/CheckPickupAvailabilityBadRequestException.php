<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckPickupAvailabilityBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse400
     */
    private $pickupV1PickupsAvailabilitiesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse400 $pickupV1PickupsAvailabilitiesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1PickupsAvailabilitiesPostResponse400 = $pickupV1PickupsAvailabilitiesPostResponse400;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse400() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse400
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}