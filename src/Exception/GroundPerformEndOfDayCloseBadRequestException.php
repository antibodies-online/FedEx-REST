<?php

namespace AntibodiesOnline\FedEx\Exception;

class GroundPerformEndOfDayCloseBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse400
     */
    private $shipV1EndofdayPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse400 $shipV1EndofdayPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1EndofdayPutResponse400 = $shipV1EndofdayPutResponse400;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse400
    {
        return $this->shipV1EndofdayPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}