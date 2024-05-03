<?php

namespace AntibodiesOnline\FedEx\Exception;

class ModifyOpenShipmentPackagesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse404
     */
    private $shipV1OpenshipmentsPackagesPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse404 $shipV1OpenshipmentsPackagesPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPackagesPutResponse404 = $shipV1OpenshipmentsPackagesPutResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse404
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}