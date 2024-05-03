<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentPackageValidateUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse401
     */
    private $shipV1ShipmentsPackagesValidatePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse401 $shipV1ShipmentsPackagesValidatePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1ShipmentsPackagesValidatePostResponse401 = $shipV1ShipmentsPackagesValidatePostResponse401;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPackagesValidatePostResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse401
    {
        return $this->shipV1ShipmentsPackagesValidatePostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}