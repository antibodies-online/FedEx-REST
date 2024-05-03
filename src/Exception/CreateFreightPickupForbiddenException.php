<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateFreightPickupForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse403
     */
    private $pickupV1FreightPickupsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse403 $pickupV1FreightPickupsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1FreightPickupsPostResponse403 = $pickupV1FreightPickupsPostResponse403;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsPostResponse403() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsPostResponse403
    {
        return $this->pickupV1FreightPickupsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}