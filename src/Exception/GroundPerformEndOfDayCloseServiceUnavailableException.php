<?php

namespace AntibodiesOnline\FedEx\Exception;

class GroundPerformEndOfDayCloseServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse503
     */
    private $shipV1EndofdayPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse503 $shipV1EndofdayPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1EndofdayPutResponse503 = $shipV1EndofdayPutResponse503;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse503() : \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse503
    {
        return $this->shipV1EndofdayPutResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}