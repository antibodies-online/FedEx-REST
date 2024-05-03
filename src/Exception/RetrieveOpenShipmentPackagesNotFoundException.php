<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentPackagesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse404
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse404 $shipV1OpenshipmentsPackagesRetrievePostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse404 = $shipV1OpenshipmentsPackagesRetrievePostResponse404;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse404
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}