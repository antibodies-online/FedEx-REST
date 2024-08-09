<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GroundPerformEndOfDayCloseForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse403
     */
    private $shipV1EndofdayPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse403 $shipV1EndofdayPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1EndofdayPutResponse403 = $shipV1EndofdayPutResponse403;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse403
    {
        return $this->shipV1EndofdayPutResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}