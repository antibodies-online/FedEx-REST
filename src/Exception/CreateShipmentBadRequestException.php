<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse400
     */
    private $shipV1ShipmentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse400 $shipV1ShipmentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsPostResponse400 = $shipV1ShipmentsPostResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse400
    {
        return $this->shipV1ShipmentsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}