<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class PerformEndOfDayCloseNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse404
     */
    private $shipV1EndofdayPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse404 $shipV1EndofdayPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1EndofdayPostResponse404 = $shipV1EndofdayPostResponse404;
        $this->response = $response;
    }
    public function getShipV1EndofdayPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\ShipV1EndofdayPostResponse404
    {
        return $this->shipV1EndofdayPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}