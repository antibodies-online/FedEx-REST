<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelFreightPickupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse401
     */
    private $pickupV1FreightPickupsCancelPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse401 $pickupV1FreightPickupsCancelPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1FreightPickupsCancelPutResponse401 = $pickupV1FreightPickupsCancelPutResponse401;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsCancelPutResponse401() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse401
    {
        return $this->pickupV1FreightPickupsCancelPutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}