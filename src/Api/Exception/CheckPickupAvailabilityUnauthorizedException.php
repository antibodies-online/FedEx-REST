<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CheckPickupAvailabilityUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse401
     */
    private $pickupV1PickupsAvailabilitiesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse401 $pickupV1PickupsAvailabilitiesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1PickupsAvailabilitiesPostResponse401 = $pickupV1PickupsAvailabilitiesPostResponse401;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsAvailabilitiesPostResponse401
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}