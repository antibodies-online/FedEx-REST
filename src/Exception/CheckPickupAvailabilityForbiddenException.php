<?php

namespace AntibodiesOnline\FedEx\Exception;

class CheckPickupAvailabilityForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse403
     */
    private $pickupV1PickupsAvailabilitiesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse403 $pickupV1PickupsAvailabilitiesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1PickupsAvailabilitiesPostResponse403 = $pickupV1PickupsAvailabilitiesPostResponse403;
        $this->response = $response;
    }
    public function getPickupV1PickupsAvailabilitiesPostResponse403() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsAvailabilitiesPostResponse403
    {
        return $this->pickupV1PickupsAvailabilitiesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}