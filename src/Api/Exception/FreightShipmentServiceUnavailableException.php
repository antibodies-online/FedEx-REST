<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse503
     */
    private $shipV1FreightShipmentsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse503 $shipV1FreightShipmentsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1FreightShipmentsPostResponse503 = $shipV1FreightShipmentsPostResponse503;
        $this->response = $response;
    }
    public function getShipV1FreightShipmentsPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse503
    {
        return $this->shipV1FreightShipmentsPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}