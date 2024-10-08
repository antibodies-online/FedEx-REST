<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentPackagesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse401
     */
    private $shipV1OpenshipmentsPackagesPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse401 $shipV1OpenshipmentsPackagesPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPackagesPutResponse401 = $shipV1OpenshipmentsPackagesPutResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse401
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}