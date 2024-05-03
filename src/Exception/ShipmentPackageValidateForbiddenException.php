<?php

namespace AntibodiesOnline\FedEx\Exception;

class ShipmentPackageValidateForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPackagesValidatePostResponse403
     */
    private $shipV1ShipmentsPackagesValidatePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPackagesValidatePostResponse403 $shipV1ShipmentsPackagesValidatePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsPackagesValidatePostResponse403 = $shipV1ShipmentsPackagesValidatePostResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPackagesValidatePostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPackagesValidatePostResponse403
    {
        return $this->shipV1ShipmentsPackagesValidatePostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}