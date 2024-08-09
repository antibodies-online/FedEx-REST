<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelTagInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500 $shipV1ShipmentsTagCancelShipmentidPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse500 = $shipV1ShipmentsTagCancelShipmentidPutResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse500(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}