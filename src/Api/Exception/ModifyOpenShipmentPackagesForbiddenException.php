<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ModifyOpenShipmentPackagesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse403
     */
    private $shipV1OpenshipmentsPackagesPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse403 $shipV1OpenshipmentsPackagesPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPackagesPutResponse403 = $shipV1OpenshipmentsPackagesPutResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPutResponse403() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse403
    {
        return $this->shipV1OpenshipmentsPackagesPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}