<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse401
     */
    private $shipV1FreightShipmentsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse401 $shipV1FreightShipmentsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1FreightShipmentsPostResponse401 = $shipV1FreightShipmentsPostResponse401;
        $this->response = $response;
    }
    public function getShipV1FreightShipmentsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse401
    {
        return $this->shipV1FreightShipmentsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}