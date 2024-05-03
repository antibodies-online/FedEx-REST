<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelPickupBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse400
     */
    private $pickupV1PickupsCancelPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse400 $pickupV1PickupsCancelPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1PickupsCancelPutResponse400 = $pickupV1PickupsCancelPutResponse400;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse400() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse400
    {
        return $this->pickupV1PickupsCancelPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}