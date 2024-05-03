<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveOpenShipmentPackagesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse500
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse500 $shipV1OpenshipmentsPackagesRetrievePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse500 = $shipV1OpenshipmentsPackagesRetrievePostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse500
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}