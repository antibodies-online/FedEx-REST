<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelTagBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse400
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse400 $shipV1ShipmentsTagCancelShipmentidPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse400 = $shipV1ShipmentsTagCancelShipmentidPutResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse400
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}