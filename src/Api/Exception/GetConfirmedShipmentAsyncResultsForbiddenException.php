<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetConfirmedShipmentAsyncResultsForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse403
     */
    private $shipV1ShipmentsResultsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse403 $shipV1ShipmentsResultsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsResultsPostResponse403 = $shipV1ShipmentsResultsPostResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse403
    {
        return $this->shipV1ShipmentsResultsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}