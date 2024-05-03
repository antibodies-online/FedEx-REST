<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentPackagesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse403
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse403 $shipV1OpenshipmentsPackagesRetrievePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse403 = $shipV1OpenshipmentsPackagesRetrievePostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse403
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}