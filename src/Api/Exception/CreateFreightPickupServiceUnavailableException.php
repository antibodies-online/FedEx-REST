<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateFreightPickupServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse503
     */
    private $pickupV1FreightPickupsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse503 $pickupV1FreightPickupsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1FreightPickupsPostResponse503 = $pickupV1FreightPickupsPostResponse503;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse503
    {
        return $this->pickupV1FreightPickupsPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}