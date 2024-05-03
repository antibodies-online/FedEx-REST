<?php

namespace AntibodiesOnline\FedEx\Exception;

class ConfirmOpenShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse500
     */
    private $shipV1OpenshipmentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse500 $shipV1OpenshipmentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPostResponse500 = $shipV1OpenshipmentsPostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse500
    {
        return $this->shipV1OpenshipmentsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}