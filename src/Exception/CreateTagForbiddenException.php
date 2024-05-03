<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateTagForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse403
     */
    private $shipV1ShipmentsTagPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse403 $shipV1ShipmentsTagPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1ShipmentsTagPostResponse403 = $shipV1ShipmentsTagPostResponse403;
        $this->response = $response;
    }
    public function getShipV1ShipmentsTagPostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagPostResponse403
    {
        return $this->shipV1ShipmentsTagPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}