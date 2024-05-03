<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateTagUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse401
     */
    private $shipV1ShipmentsTagPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse401 $shipV1ShipmentsTagPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsTagPostResponse401 = $shipV1ShipmentsTagPostResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse401
    {
        return $this->shipV1ShipmentsTagPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}