<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetOpenShipmentResultsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse404
     */
    private $shipV1OpenshipmentsResultsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse404 $shipV1OpenshipmentsResultsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsResultsPostResponse404 = $shipV1OpenshipmentsResultsPostResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsResultsPostResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsResultsPostResponse404
    {
        return $this->shipV1OpenshipmentsResultsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}