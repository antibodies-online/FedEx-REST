<?php

namespace AntibodiesOnline\FedEx\Exception;

class DeleteOpenShipmentPackagesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesDeletePutResponse503
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesDeletePutResponse503 $shipV1OpenshipmentsPackagesDeletePutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse503 = $shipV1OpenshipmentsPackagesDeletePutResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse503() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesDeletePutResponse503
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}