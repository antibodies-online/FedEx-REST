<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class PerformEndOfDayCloseUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse401
     */
    private $shipV1EndofdayPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse401 $shipV1EndofdayPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->shipV1EndofdayPostResponse401 = $shipV1EndofdayPostResponse401;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse401
    {
        return $this->shipV1EndofdayPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}