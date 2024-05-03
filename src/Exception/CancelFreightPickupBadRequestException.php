<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelFreightPickupBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse400
     */
    private $pickupV1FreightPickupsCancelPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse400 $pickupV1FreightPickupsCancelPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1FreightPickupsCancelPutResponse400 = $pickupV1FreightPickupsCancelPutResponse400;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsCancelPutResponse400() : \AntibodiesOnline\FedEx\Model\PickupV1FreightPickupsCancelPutResponse400
    {
        return $this->pickupV1FreightPickupsCancelPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}