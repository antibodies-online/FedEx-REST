<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetConfirmedShipmentAsyncResultsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse404
     */
    private $shipV1ShipmentsResultsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse404 $shipV1ShipmentsResultsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1ShipmentsResultsPostResponse404 = $shipV1ShipmentsResultsPostResponse404;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse404
    {
        return $this->shipV1ShipmentsResultsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}