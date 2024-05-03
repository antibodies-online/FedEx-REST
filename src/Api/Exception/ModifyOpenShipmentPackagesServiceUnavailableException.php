<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentPackagesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse503
     */
    private $shipV1OpenshipmentsPackagesPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse503 $shipV1OpenshipmentsPackagesPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPackagesPutResponse503 = $shipV1OpenshipmentsPackagesPutResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse503
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}