<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveOpenShipmentPackagesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse400
     */
    private $shipV1OpenshipmentsPackagesRetrievePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse400 $shipV1OpenshipmentsPackagesRetrievePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPackagesRetrievePostResponse400 = $shipV1OpenshipmentsPackagesRetrievePostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPackagesRetrievePostResponse400(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesRetrievePostResponse400
    {
        return $this->shipV1OpenshipmentsPackagesRetrievePostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}