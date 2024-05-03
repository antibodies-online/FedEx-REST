<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse400
     */
    private $shipV1ShipmentsCancelPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse400 $shipV1ShipmentsCancelPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsCancelPutResponse400 = $shipV1ShipmentsCancelPutResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsCancelPutResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse400
    {
        return $this->shipV1ShipmentsCancelPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}