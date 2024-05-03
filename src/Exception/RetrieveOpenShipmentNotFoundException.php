<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse404
     */
    private $shipV1OpenshipmentsRetrievePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse404 $shipV1OpenshipmentsRetrievePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsRetrievePostResponse404 = $shipV1OpenshipmentsRetrievePostResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsRetrievePostResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse404
    {
        return $this->shipV1OpenshipmentsRetrievePostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}