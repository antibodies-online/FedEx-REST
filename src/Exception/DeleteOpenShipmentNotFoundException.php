<?php

namespace AntibodiesOnline\FedEx\Exception;

class DeleteOpenShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse404
     */
    private $shipV1OpenshipmentsDeletePutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse404 $shipV1OpenshipmentsDeletePutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsDeletePutResponse404 = $shipV1OpenshipmentsDeletePutResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse404
    {
        return $this->shipV1OpenshipmentsDeletePutResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}