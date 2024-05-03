<?php

namespace AntibodiesOnline\FedEx\Exception;

class ModifyOpenShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse400
     */
    private $shipV1OpenshipmentsPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse400 $shipV1OpenshipmentsPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPutResponse400 = $shipV1OpenshipmentsPutResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse400
    {
        return $this->shipV1OpenshipmentsPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}