<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelTagNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse404
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse404 $shipV1ShipmentsTagCancelShipmentidPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse404 = $shipV1ShipmentsTagCancelShipmentidPutResponse404;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse404
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}