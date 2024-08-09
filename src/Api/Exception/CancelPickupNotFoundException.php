<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelPickupNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse404
     */
    private $pickupV1PickupsCancelPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse404 $pickupV1PickupsCancelPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->pickupV1PickupsCancelPutResponse404 = $pickupV1PickupsCancelPutResponse404;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse404(): \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse404
    {
        return $this->pickupV1PickupsCancelPutResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}