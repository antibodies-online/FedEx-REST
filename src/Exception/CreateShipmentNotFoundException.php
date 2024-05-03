<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateShipmentNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse404
     */
    private $shipV1ShipmentsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse404 $shipV1ShipmentsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1ShipmentsPostResponse404 = $shipV1ShipmentsPostResponse404;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse404() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse404
    {
        return $this->shipV1ShipmentsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}