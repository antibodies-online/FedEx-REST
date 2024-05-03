<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelPickupInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse500
     */
    private $pickupV1PickupsCancelPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse500 $pickupV1PickupsCancelPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1PickupsCancelPutResponse500 = $pickupV1PickupsCancelPutResponse500;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse500() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse500
    {
        return $this->pickupV1PickupsCancelPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}