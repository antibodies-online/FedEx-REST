<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse503
     */
    private $shipV1OpenshipmentsDeletePutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse503 $shipV1OpenshipmentsDeletePutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsDeletePutResponse503 = $shipV1OpenshipmentsDeletePutResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse503
    {
        return $this->shipV1OpenshipmentsDeletePutResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}