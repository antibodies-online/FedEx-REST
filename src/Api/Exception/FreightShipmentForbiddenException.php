<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FreightShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse403
     */
    private $shipV1FreightShipmentsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse403 $shipV1FreightShipmentsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1FreightShipmentsPostResponse403 = $shipV1FreightShipmentsPostResponse403;
        $this->response = $response;
    }
    public function getShipV1FreightShipmentsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse403
    {
        return $this->shipV1FreightShipmentsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}