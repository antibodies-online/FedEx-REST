<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class PerformEndOfDayCloseBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse400
     */
    private $shipV1EndofdayPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse400 $shipV1EndofdayPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1EndofdayPostResponse400 = $shipV1EndofdayPostResponse400;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse400
    {
        return $this->shipV1EndofdayPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}