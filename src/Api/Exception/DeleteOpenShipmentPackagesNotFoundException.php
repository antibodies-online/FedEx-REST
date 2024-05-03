<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentPackagesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse404
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse404 $shipV1OpenshipmentsPackagesDeletePutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse404 = $shipV1OpenshipmentsPackagesDeletePutResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse404() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse404
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}