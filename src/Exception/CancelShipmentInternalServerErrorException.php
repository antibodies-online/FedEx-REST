<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse500
     */
    private $shipV1ShipmentsCancelPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse500 $shipV1ShipmentsCancelPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsCancelPutResponse500 = $shipV1ShipmentsCancelPutResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsCancelPutResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse500
    {
        return $this->shipV1ShipmentsCancelPutResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}