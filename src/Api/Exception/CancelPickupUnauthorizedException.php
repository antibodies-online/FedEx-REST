<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelPickupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse401
     */
    private $pickupV1PickupsCancelPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse401 $pickupV1PickupsCancelPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1PickupsCancelPutResponse401 = $pickupV1PickupsCancelPutResponse401;
        $this->response = $response;
    }
    public function getPickupV1PickupsCancelPutResponse401() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsCancelPutResponse401
    {
        return $this->pickupV1PickupsCancelPutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}