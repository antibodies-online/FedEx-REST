<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreateOpenShipmenttForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse403
     */
    private $shipV1OpenshipmentsCreatePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse403 $shipV1OpenshipmentsCreatePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsCreatePostResponse403 = $shipV1OpenshipmentsCreatePostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsCreatePostResponse403() : \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsCreatePostResponse403
    {
        return $this->shipV1OpenshipmentsCreatePostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}