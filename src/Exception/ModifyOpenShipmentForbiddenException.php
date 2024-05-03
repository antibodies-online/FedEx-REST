<?php

namespace AntibodiesOnline\FedEx\Exception;

class ModifyOpenShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse403
     */
    private $shipV1OpenshipmentsPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse403 $shipV1OpenshipmentsPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPutResponse403 = $shipV1OpenshipmentsPutResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPutResponse403
    {
        return $this->shipV1OpenshipmentsPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}