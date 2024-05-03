<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class AddOpenShipmentPackagesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse500
     */
    private $shipV1OpenshipmentsPackagesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse500 $shipV1OpenshipmentsPackagesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsPackagesPostResponse500 = $shipV1OpenshipmentsPackagesPostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPostResponse500
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}