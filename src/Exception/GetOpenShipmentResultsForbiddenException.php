<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetOpenShipmentResultsForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse403
     */
    private $shipV1OpenshipmentsResultsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse403 $shipV1OpenshipmentsResultsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsResultsPostResponse403 = $shipV1OpenshipmentsResultsPostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse403
    {
        return $this->shipV1OpenshipmentsResultsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}