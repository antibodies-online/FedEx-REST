<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse500
     */
    private $shipV1OpenshipmentsRetrievePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse500 $shipV1OpenshipmentsRetrievePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsRetrievePostResponse500 = $shipV1OpenshipmentsRetrievePostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsRetrievePostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsRetrievePostResponse500
    {
        return $this->shipV1OpenshipmentsRetrievePostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}