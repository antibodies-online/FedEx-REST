<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentPackagesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse500
     */
    private $shipV1OpenshipmentsPackagesDeletePutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse500 $shipV1OpenshipmentsPackagesDeletePutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPackagesDeletePutResponse500 = $shipV1OpenshipmentsPackagesDeletePutResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesDeletePutResponse500(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesDeletePutResponse500
    {
        return $this->shipV1OpenshipmentsPackagesDeletePutResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}