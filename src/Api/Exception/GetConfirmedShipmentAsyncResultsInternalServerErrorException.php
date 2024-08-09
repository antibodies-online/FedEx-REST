<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetConfirmedShipmentAsyncResultsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse500
     */
    private $shipV1ShipmentsResultsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse500 $shipV1ShipmentsResultsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsResultsPostResponse500 = $shipV1ShipmentsResultsPostResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse500
    {
        return $this->shipV1ShipmentsResultsPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}