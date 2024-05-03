<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentPackagesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse403
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse403 $shipV1OpenshipmentsPackagesDeletePutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse403 = $shipV1OpenshipmentsPackagesDeletePutResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse403() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse403
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}