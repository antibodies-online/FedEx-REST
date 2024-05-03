<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetOpenShipmentResultsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse400
     */
    private $shipV1OpenshipmentsResultsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse400 $shipV1OpenshipmentsResultsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsResultsPostResponse400 = $shipV1OpenshipmentsResultsPostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse400
    {
        return $this->shipV1OpenshipmentsResultsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}