<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveOpenShipmentForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse403
     */
    private $shipV1OpenshipmentsRetrievePostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse403 $shipV1OpenshipmentsRetrievePostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->shipV1OpenshipmentsRetrievePostResponse403 = $shipV1OpenshipmentsRetrievePostResponse403;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsRetrievePostResponse403(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsRetrievePostResponse403
    {
        return $this->shipV1OpenshipmentsRetrievePostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}