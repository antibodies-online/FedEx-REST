<?php

namespace AntibodiesOnline\FedEx\Exception;

class CreatePickupNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse404
     */
    private $pickupV1PickupsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse404 $pickupV1PickupsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->pickupV1PickupsPostResponse404 = $pickupV1PickupsPostResponse404;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse404() : \AntibodiesOnline\FedEx\Model\PickupV1PickupsPostResponse404
    {
        return $this->pickupV1PickupsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}