<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateTagServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse503
     */
    private $shipV1ShipmentsTagPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse503 $shipV1ShipmentsTagPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1ShipmentsTagPostResponse503 = $shipV1ShipmentsTagPostResponse503;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse503
    {
        return $this->shipV1ShipmentsTagPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}