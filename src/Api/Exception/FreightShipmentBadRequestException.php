<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse400
     */
    private $shipV1FreightShipmentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse400 $shipV1FreightShipmentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1FreightShipmentsPostResponse400 = $shipV1FreightShipmentsPostResponse400;
        $this->response = $response;
    }
    public function getShipV1FreightShipmentsPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse400
    {
        return $this->shipV1FreightShipmentsPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}