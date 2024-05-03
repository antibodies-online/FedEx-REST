<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreatePickupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse401
     */
    private $pickupV1PickupsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse401 $pickupV1PickupsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->pickupV1PickupsPostResponse401 = $pickupV1PickupsPostResponse401;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse401() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse401
    {
        return $this->pickupV1PickupsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}