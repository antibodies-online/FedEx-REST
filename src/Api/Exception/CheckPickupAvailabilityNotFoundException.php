<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CheckPickupAvailabilityNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse404
     */
    private $pickupV1PickupsAvailabilitiesPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse404 $pickupV1PickupsAvailabilitiesPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->pickupV1PickupsAvailabilitiesPostResponse404 = $pickupV1PickupsAvailabilitiesPostResponse404;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse404
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}