<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse500
     */
    private $shipV1ShipmentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse500 $shipV1ShipmentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsPostResponse500 = $shipV1ShipmentsPostResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse500
    {
        return $this->shipV1ShipmentsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}