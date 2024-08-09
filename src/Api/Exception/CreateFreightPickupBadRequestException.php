<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateFreightPickupBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse400
     */
    private $pickupV1FreightPickupsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse400 $pickupV1FreightPickupsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1FreightPickupsPostResponse400 = $pickupV1FreightPickupsPostResponse400;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsPostResponse400
    {
        return $this->pickupV1FreightPickupsPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}