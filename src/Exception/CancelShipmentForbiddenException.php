<?php

namespace AntibodiesOnline\FedEx\Exception;

class CancelShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse403
     */
    private $shipV1ShipmentsCancelPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse403 $shipV1ShipmentsCancelPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsCancelPutResponse403 = $shipV1ShipmentsCancelPutResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsCancelPutResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse403
    {
        return $this->shipV1ShipmentsCancelPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}