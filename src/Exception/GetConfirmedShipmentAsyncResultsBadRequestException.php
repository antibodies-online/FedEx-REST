<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetConfirmedShipmentAsyncResultsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsResultsPostResponse400
     */
    private $shipV1ShipmentsResultsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsResultsPostResponse400 $shipV1ShipmentsResultsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsResultsPostResponse400 = $shipV1ShipmentsResultsPostResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsResultsPostResponse400
    {
        return $this->shipV1ShipmentsResultsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}