<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveOpenShipmentUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse401
     */
    private $shipV1OpenshipmentsRetrievePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse401 $shipV1OpenshipmentsRetrievePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsRetrievePostResponse401 = $shipV1OpenshipmentsRetrievePostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsRetrievePostResponse401() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse401
    {
        return $this->shipV1OpenshipmentsRetrievePostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}