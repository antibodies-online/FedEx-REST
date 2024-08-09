<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveOpenShipmentPackagesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse401
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse401 $shipV1OpenshipmentsPackagesRetrievePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse401 = $shipV1OpenshipmentsPackagesRetrievePostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse401
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}