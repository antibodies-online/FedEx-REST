<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class AddOpenShipmentPackagesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse403
     */
    private $shipV1OpenshipmentsPackagesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse403 $shipV1OpenshipmentsPackagesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPackagesPostResponse403 = $shipV1OpenshipmentsPackagesPostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse403
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}