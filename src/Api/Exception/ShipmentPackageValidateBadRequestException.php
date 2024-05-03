<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentPackageValidateBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse400
     */
    private $shipV1ShipmentsPackagesValidatePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse400 $shipV1ShipmentsPackagesValidatePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsPackagesValidatePostResponse400 = $shipV1ShipmentsPackagesValidatePostResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPackagesValidatePostResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse400
    {
        return $this->shipV1ShipmentsPackagesValidatePostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}