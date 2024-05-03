<?php

namespace AntibodiesOnline\FedEx\Exception;

class ConfirmOpenShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse400
     */
    private $shipV1OpenshipmentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse400 $shipV1OpenshipmentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsPostResponse400 = $shipV1OpenshipmentsPostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse400() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse400
    {
        return $this->shipV1OpenshipmentsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}