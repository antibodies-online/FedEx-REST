<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse503
     */
    private $shipV1ShipmentsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse503 $shipV1ShipmentsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1ShipmentsPostResponse503 = $shipV1ShipmentsPostResponse503;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse503
    {
        return $this->shipV1ShipmentsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}