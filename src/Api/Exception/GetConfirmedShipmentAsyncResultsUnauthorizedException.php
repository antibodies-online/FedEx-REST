<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetConfirmedShipmentAsyncResultsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse401
     */
    private $shipV1ShipmentsResultsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse401 $shipV1ShipmentsResultsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsResultsPostResponse401 = $shipV1ShipmentsResultsPostResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsResultsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsResultsPostResponse401
    {
        return $this->shipV1ShipmentsResultsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}