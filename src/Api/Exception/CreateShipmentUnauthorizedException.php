<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse401
     */
    private $shipV1ShipmentsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse401 $shipV1ShipmentsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsPostResponse401 = $shipV1ShipmentsPostResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse401
    {
        return $this->shipV1ShipmentsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}