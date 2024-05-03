<?php

namespace AntibodiesOnline\FedEx\Exception;

class GroundPerformEndOfDayCloseInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse500
     */
    private $shipV1EndofdayPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse500 $shipV1EndofdayPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1EndofdayPutResponse500 = $shipV1EndofdayPutResponse500;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse500
    {
        return $this->shipV1EndofdayPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}