<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelTagServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse503
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse503 $shipV1ShipmentsTagCancelShipmentidPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse503 = $shipV1ShipmentsTagCancelShipmentidPutResponse503;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse503
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}