<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelTagUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse401
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse401 $shipV1ShipmentsTagCancelShipmentidPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse401 = $shipV1ShipmentsTagCancelShipmentidPutResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse401
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}