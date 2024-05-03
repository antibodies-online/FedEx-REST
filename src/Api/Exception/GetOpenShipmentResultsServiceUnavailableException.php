<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetOpenShipmentResultsServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse503
     */
    private $shipV1OpenshipmentsResultsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse503 $shipV1OpenshipmentsResultsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsResultsPostResponse503 = $shipV1OpenshipmentsResultsPostResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse503
    {
        return $this->shipV1OpenshipmentsResultsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}