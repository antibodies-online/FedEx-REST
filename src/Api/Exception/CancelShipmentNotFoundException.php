<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CancelShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse404
     */
    private $shipV1ShipmentsCancelPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse404 $shipV1ShipmentsCancelPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1ShipmentsCancelPutResponse404 = $shipV1ShipmentsCancelPutResponse404;
        $this->response = $response;
    }
    public function getShipV1ShipmentsCancelPutResponse404(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsCancelPutResponse404
    {
        return $this->shipV1ShipmentsCancelPutResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}