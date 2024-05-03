<?php

namespace AntibodiesOnline\FedEx\Exception;

class AddOpenShipmentPackagesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse400
     */
    private $shipV1OpenshipmentsPackagesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse400 $shipV1OpenshipmentsPackagesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPackagesPostResponse400 = $shipV1OpenshipmentsPackagesPostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPostResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse400
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}