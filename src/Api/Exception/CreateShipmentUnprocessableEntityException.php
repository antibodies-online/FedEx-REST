<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateShipmentUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse422
     */
    private $shipV1ShipmentsPostResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse422 $shipV1ShipmentsPostResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable Entity');
        $this->shipV1ShipmentsPostResponse422 = $shipV1ShipmentsPostResponse422;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse422(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse422
    {
        return $this->shipV1ShipmentsPostResponse422;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}