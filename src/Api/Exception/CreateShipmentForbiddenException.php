<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse403
     */
    private $shipV1ShipmentsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse403 $shipV1ShipmentsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsPostResponse403 = $shipV1ShipmentsPostResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1ShipmentsPostResponse403
    {
        return $this->shipV1ShipmentsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}