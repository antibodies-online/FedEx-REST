<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse400
     */
    private $shipV1OpenshipmentsRetrievePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse400 $shipV1OpenshipmentsRetrievePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsRetrievePostResponse400 = $shipV1OpenshipmentsRetrievePostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsRetrievePostResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse400
    {
        return $this->shipV1OpenshipmentsRetrievePostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}