<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ConfirmOpenShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse404
     */
    private $shipV1OpenshipmentsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse404 $shipV1OpenshipmentsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPostResponse404 = $shipV1OpenshipmentsPostResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPostResponse404
    {
        return $this->shipV1OpenshipmentsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}