<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelTagForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse403
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse403 $shipV1ShipmentsTagCancelShipmentidPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse403 = $shipV1ShipmentsTagCancelShipmentidPutResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagCancelShipmentidPutResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse403
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}