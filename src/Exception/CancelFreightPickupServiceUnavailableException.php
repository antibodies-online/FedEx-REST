<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelFreightPickupServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse503
     */
    private $pickupV1FreightPickupsCancelPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse503 $pickupV1FreightPickupsCancelPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1FreightPickupsCancelPutResponse503 = $pickupV1FreightPickupsCancelPutResponse503;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsCancelPutResponse503() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse503
    {
        return $this->pickupV1FreightPickupsCancelPutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}