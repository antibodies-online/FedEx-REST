<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class AddOpenShipmentPackagesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse401
     */
    private $shipV1OpenshipmentsPackagesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse401 $shipV1OpenshipmentsPackagesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPackagesPostResponse401 = $shipV1OpenshipmentsPackagesPostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse401
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}