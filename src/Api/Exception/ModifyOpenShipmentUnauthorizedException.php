<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse401
     */
    private $shipV1OpenshipmentsPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse401 $shipV1OpenshipmentsPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPutResponse401 = $shipV1OpenshipmentsPutResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse401
    {
        return $this->shipV1OpenshipmentsPutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}