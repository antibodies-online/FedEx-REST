<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelPickupForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse403
     */
    private $pickupV1PickupsCancelPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse403 $pickupV1PickupsCancelPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1PickupsCancelPutResponse403 = $pickupV1PickupsCancelPutResponse403;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse403() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsCancelPutResponse403
    {
        return $this->pickupV1PickupsCancelPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}