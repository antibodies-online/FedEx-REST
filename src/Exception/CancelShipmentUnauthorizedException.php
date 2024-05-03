<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse401
     */
    private $shipV1ShipmentsCancelPutResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse401 $shipV1ShipmentsCancelPutResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsCancelPutResponse401 = $shipV1ShipmentsCancelPutResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsCancelPutResponse401() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse401
    {
        return $this->shipV1ShipmentsCancelPutResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}