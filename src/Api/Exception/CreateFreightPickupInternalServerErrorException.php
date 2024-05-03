<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateFreightPickupInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse500
     */
    private $pickupV1FreightPickupsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse500 $pickupV1FreightPickupsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1FreightPickupsPostResponse500 = $pickupV1FreightPickupsPostResponse500;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse500
    {
        return $this->pickupV1FreightPickupsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}