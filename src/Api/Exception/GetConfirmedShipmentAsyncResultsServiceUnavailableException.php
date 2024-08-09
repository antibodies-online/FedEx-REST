<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetConfirmedShipmentAsyncResultsServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse503
     */
    private $shipV1ShipmentsResultsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse503 $shipV1ShipmentsResultsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1ShipmentsResultsPostResponse503 = $shipV1ShipmentsResultsPostResponse503;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse503
    {
        return $this->shipV1ShipmentsResultsPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}