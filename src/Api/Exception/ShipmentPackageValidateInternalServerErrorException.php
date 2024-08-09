<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ShipmentPackageValidateInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse500
     */
    private $shipV1ShipmentsPackagesValidatePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse500 $shipV1ShipmentsPackagesValidatePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsPackagesValidatePostResponse500 = $shipV1ShipmentsPackagesValidatePostResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPackagesValidatePostResponse500(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPackagesValidatePostResponse500
    {
        return $this->shipV1ShipmentsPackagesValidatePostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}