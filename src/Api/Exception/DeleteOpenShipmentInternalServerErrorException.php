<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse500
     */
    private $shipV1OpenshipmentsDeletePutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse500 $shipV1OpenshipmentsDeletePutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsDeletePutResponse500 = $shipV1OpenshipmentsDeletePutResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse500() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse500
    {
        return $this->shipV1OpenshipmentsDeletePutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}