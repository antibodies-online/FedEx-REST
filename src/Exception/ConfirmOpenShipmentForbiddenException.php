<?php

namespace AntibodiesOnline\FedEx\Exception;

class ConfirmOpenShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse403
     */
    private $shipV1OpenshipmentsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse403 $shipV1OpenshipmentsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsPostResponse403 = $shipV1OpenshipmentsPostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsPostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPostResponse403
    {
        return $this->shipV1OpenshipmentsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}