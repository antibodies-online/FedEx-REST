<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreateOpenShipmenttInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse500
     */
    private $shipV1OpenshipmentsCreatePostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse500 $shipV1OpenshipmentsCreatePostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsCreatePostResponse500 = $shipV1OpenshipmentsCreatePostResponse500;
        $this->response = $response;
    }
    public function getShipV1OpenshipmentsCreatePostResponse500(): \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsCreatePostResponse500
    {
        return $this->shipV1OpenshipmentsCreatePostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}