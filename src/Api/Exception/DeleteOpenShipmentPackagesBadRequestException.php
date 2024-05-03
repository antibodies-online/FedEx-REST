<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentPackagesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse400
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse400 $shipV1OpenshipmentsPackagesDeletePutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse400 = $shipV1OpenshipmentsPackagesDeletePutResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse400
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}