<?php

namespace AntibodiesOnline\FedEx\Exception;

class PerformEndOfDayCloseInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPostResponse500
     */
    private $shipV1EndofdayPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPostResponse500 $shipV1EndofdayPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1EndofdayPostResponse500 = $shipV1EndofdayPostResponse500;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse500() : \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPostResponse500
    {
        return $this->shipV1EndofdayPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}