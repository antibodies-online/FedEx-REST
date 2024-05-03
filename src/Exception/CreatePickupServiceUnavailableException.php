<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreatePickupServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse503
     */
    private $pickupV1PickupsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse503 $pickupV1PickupsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->pickupV1PickupsPostResponse503 = $pickupV1PickupsPostResponse503;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse503() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse503
    {
        return $this->pickupV1PickupsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}