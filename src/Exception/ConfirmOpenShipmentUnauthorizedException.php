<?php

namespace AntibodiesOnline\FedEx\Exception;

class ConfirmOpenShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse401
     */
    private $shipV1OpenshipmentsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse401 $shipV1OpenshipmentsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsPostResponse401 = $shipV1OpenshipmentsPostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse401() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse401
    {
        return $this->shipV1OpenshipmentsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}