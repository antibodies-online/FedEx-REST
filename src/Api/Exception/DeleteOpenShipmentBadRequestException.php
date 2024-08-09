<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse400
     */
    private $shipV1OpenshipmentsDeletePutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse400 $shipV1OpenshipmentsDeletePutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsDeletePutResponse400 = $shipV1OpenshipmentsDeletePutResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse400(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse400
    {
        return $this->shipV1OpenshipmentsDeletePutResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}