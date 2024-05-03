<?php

namespace AntibodiesOnline\FedEx\Exception;

class ModifyOpenShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse500
     */
    private $shipV1OpenshipmentsPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse500 $shipV1OpenshipmentsPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPutResponse500 = $shipV1OpenshipmentsPutResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse500
    {
        return $this->shipV1OpenshipmentsPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}