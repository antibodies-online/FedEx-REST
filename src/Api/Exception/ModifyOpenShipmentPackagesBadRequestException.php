<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentPackagesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse400
     */
    private $shipV1OpenshipmentsPackagesPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse400 $shipV1OpenshipmentsPackagesPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPackagesPutResponse400 = $shipV1OpenshipmentsPackagesPutResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse400
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}