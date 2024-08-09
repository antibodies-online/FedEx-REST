<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class DeleteOpenShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse403
     */
    private $shipV1OpenshipmentsDeletePutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse403 $shipV1OpenshipmentsDeletePutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsDeletePutResponse403 = $shipV1OpenshipmentsDeletePutResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsDeletePutResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsDeletePutResponse403
    {
        return $this->shipV1OpenshipmentsDeletePutResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}