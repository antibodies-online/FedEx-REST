<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateOpenShipmenttBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse400
     */
    private $shipV1OpenshipmentsCreatePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse400 $shipV1OpenshipmentsCreatePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1OpenshipmentsCreatePostResponse400 = $shipV1OpenshipmentsCreatePostResponse400;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsCreatePostResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse400
    {
        return $this->shipV1OpenshipmentsCreatePostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}