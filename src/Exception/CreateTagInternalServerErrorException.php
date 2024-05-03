<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateTagInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse500
     */
    private $shipV1ShipmentsTagPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse500 $shipV1ShipmentsTagPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsTagPostResponse500 = $shipV1ShipmentsTagPostResponse500;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse500
    {
        return $this->shipV1ShipmentsTagPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}