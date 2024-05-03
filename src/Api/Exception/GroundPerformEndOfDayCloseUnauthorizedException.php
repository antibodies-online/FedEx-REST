<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GroundPerformEndOfDayCloseUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse401
     */
    private $shipV1EndofdayPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse401 $shipV1EndofdayPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1EndofdayPutResponse401 = $shipV1EndofdayPutResponse401;
        $this->response = $response;
    }
    public function getShipV1EndofdayPutResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPutResponse401
    {
        return $this->shipV1EndofdayPutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}