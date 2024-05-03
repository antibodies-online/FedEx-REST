<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelFreightPickupInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse500
     */
    private $pickupV1FreightPickupsCancelPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse500 $pickupV1FreightPickupsCancelPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1FreightPickupsCancelPutResponse500 = $pickupV1FreightPickupsCancelPutResponse500;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsCancelPutResponse500() : \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse500
    {
        return $this->pickupV1FreightPickupsCancelPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}