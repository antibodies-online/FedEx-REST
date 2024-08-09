<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateOpenShipmenttUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse401
     */
    private $shipV1OpenshipmentsCreatePostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse401 $shipV1OpenshipmentsCreatePostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1OpenshipmentsCreatePostResponse401 = $shipV1OpenshipmentsCreatePostResponse401;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsCreatePostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse401
    {
        return $this->shipV1OpenshipmentsCreatePostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}