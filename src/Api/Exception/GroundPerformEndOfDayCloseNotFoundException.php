<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GroundPerformEndOfDayCloseNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse404
     */
    private $shipV1EndofdayPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse404 $shipV1EndofdayPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1EndofdayPutResponse404 = $shipV1EndofdayPutResponse404;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse404() : \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse404
    {
        return $this->shipV1EndofdayPutResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}