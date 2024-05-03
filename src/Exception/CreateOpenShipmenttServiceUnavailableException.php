<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateOpenShipmenttServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse503
     */
    private $shipV1OpenshipmentsCreatePostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse503 $shipV1OpenshipmentsCreatePostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsCreatePostResponse503 = $shipV1OpenshipmentsCreatePostResponse503;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsCreatePostResponse503() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse503
    {
        return $this->shipV1OpenshipmentsCreatePostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}