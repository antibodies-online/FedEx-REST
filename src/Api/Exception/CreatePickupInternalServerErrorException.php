<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreatePickupInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse500
     */
    private $pickupV1PickupsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse500 $pickupV1PickupsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->pickupV1PickupsPostResponse500 = $pickupV1PickupsPostResponse500;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse500
    {
        return $this->pickupV1PickupsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}