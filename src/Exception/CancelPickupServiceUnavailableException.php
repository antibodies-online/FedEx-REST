<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelPickupServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse503
     */
    private $pickupV1PickupsCancelPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse503 $pickupV1PickupsCancelPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1PickupsCancelPutResponse503 = $pickupV1PickupsCancelPutResponse503;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse503() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse503
    {
        return $this->pickupV1PickupsCancelPutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}