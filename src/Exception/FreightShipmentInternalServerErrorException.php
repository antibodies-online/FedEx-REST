<?php

namespace AntibodiesOnline\FedEx\Exception;

class FreightShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse500
     */
    private $shipV1FreightShipmentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse500 $shipV1FreightShipmentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1FreightShipmentsPostResponse500 = $shipV1FreightShipmentsPostResponse500;
        $this->response = $response;
    }
    public function getShipV1FreightShipmentsPostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1FreightShipmentsPostResponse500
    {
        return $this->shipV1FreightShipmentsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}