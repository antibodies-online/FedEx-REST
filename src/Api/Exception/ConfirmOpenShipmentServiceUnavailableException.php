<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ConfirmOpenShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse503
     */
    private $shipV1OpenshipmentsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse503 $shipV1OpenshipmentsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPostResponse503 = $shipV1OpenshipmentsPostResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse503
    {
        return $this->shipV1OpenshipmentsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}