<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetOpenShipmentResultsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse401
     */
    private $shipV1OpenshipmentsResultsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse401 $shipV1OpenshipmentsResultsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsResultsPostResponse401 = $shipV1OpenshipmentsResultsPostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse401
    {
        return $this->shipV1OpenshipmentsResultsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}