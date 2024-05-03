<?php

namespace AntibodiesOnline\FedEx\Exception;

class ModifyOpenShipmentPackagesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse500
     */
    private $shipV1OpenshipmentsPackagesPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse500 $shipV1OpenshipmentsPackagesPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPackagesPutResponse500 = $shipV1OpenshipmentsPackagesPutResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPutResponse500
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}