<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class PerformEndOfDayCloseForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse403
     */
    private $shipV1EndofdayPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse403 $shipV1EndofdayPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1EndofdayPostResponse403 = $shipV1EndofdayPostResponse403;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse403
    {
        return $this->shipV1EndofdayPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}