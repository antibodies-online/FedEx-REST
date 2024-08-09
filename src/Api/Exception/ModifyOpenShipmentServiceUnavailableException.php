<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse503
     */
    private $shipV1OpenshipmentsPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse503 $shipV1OpenshipmentsPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPutResponse503 = $shipV1OpenshipmentsPutResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse503
    {
        return $this->shipV1OpenshipmentsPutResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}