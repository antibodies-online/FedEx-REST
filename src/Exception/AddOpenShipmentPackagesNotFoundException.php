<?php

namespace AntibodiesOnline\FedEx\Exception;

class AddOpenShipmentPackagesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse404
     */
    private $shipV1OpenshipmentsPackagesPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse404 $shipV1OpenshipmentsPackagesPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPackagesPostResponse404 = $shipV1OpenshipmentsPackagesPostResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPostResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse404
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}