<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateTagBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse400
     */
    private $shipV1ShipmentsTagPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse400 $shipV1ShipmentsTagPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsTagPostResponse400 = $shipV1ShipmentsTagPostResponse400;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsTagPostResponse400
    {
        return $this->shipV1ShipmentsTagPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}