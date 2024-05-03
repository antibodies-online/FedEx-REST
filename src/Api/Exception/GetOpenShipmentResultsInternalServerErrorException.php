<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetOpenShipmentResultsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse500
     */
    private $shipV1OpenshipmentsResultsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse500 $shipV1OpenshipmentsResultsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsResultsPostResponse500 = $shipV1OpenshipmentsResultsPostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsResultsPostResponse500
    {
        return $this->shipV1OpenshipmentsResultsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}