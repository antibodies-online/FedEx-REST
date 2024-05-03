<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveOpenShipmentPackagesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse503
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse503 $shipV1OpenshipmentsPackagesRetrievePostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse503 = $shipV1OpenshipmentsPackagesRetrievePostResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse503
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}