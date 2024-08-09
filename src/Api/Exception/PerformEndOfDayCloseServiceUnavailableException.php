<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class PerformEndOfDayCloseServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse503
     */
    private $shipV1EndofdayPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse503 $shipV1EndofdayPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1EndofdayPostResponse503 = $shipV1EndofdayPostResponse503;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse503
    {
        return $this->shipV1EndofdayPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}