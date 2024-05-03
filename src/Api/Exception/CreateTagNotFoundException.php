<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateTagNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse404
     */
    private $shipV1ShipmentsTagPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse404 $shipV1ShipmentsTagPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1ShipmentsTagPostResponse404 = $shipV1ShipmentsTagPostResponse404;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse404
    {
        return $this->shipV1ShipmentsTagPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}