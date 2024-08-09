<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse404
     */
    private $shipV1OpenshipmentsPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse404 $shipV1OpenshipmentsPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPutResponse404 = $shipV1OpenshipmentsPutResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPutResponse404(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPutResponse404
    {
        return $this->shipV1OpenshipmentsPutResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}