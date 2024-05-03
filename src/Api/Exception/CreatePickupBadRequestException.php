<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreatePickupBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse400
     */
    private $pickupV1PickupsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse400 $pickupV1PickupsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->pickupV1PickupsPostResponse400 = $pickupV1PickupsPostResponse400;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse400
    {
        return $this->pickupV1PickupsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}