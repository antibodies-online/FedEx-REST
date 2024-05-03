<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse401
     */
    private $shipV1OpenshipmentsDeletePutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse401 $shipV1OpenshipmentsDeletePutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsDeletePutResponse401 = $shipV1OpenshipmentsDeletePutResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse401
    {
        return $this->shipV1OpenshipmentsDeletePutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}