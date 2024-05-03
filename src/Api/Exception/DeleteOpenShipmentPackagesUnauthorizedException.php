<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentPackagesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse401
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse401 $shipV1OpenshipmentsPackagesDeletePutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse401 = $shipV1OpenshipmentsPackagesDeletePutResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse401
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}