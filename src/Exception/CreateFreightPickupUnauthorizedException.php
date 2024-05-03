<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateFreightPickupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse401
     */
    private $pickupV1FreightPickupsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse401 $pickupV1FreightPickupsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1FreightPickupsPostResponse401 = $pickupV1FreightPickupsPostResponse401;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsPostResponse401() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse401
    {
        return $this->pickupV1FreightPickupsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}