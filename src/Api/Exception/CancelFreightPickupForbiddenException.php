<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelFreightPickupForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse403
     */
    private $pickupV1FreightPickupsCancelPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse403 $pickupV1FreightPickupsCancelPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1FreightPickupsCancelPutResponse403 = $pickupV1FreightPickupsCancelPutResponse403;
        $this->response = $response;
    }
    public function getPickupV1FreightPickupsCancelPutResponse403(): \AntibodiesOnline\FedEx\Api\Model\PickupV1FreightPickupsCancelPutResponse403
    {
        return $this->pickupV1FreightPickupsCancelPutResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}