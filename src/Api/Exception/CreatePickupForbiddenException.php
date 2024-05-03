<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class CreatePickupForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse403
     */
    private $pickupV1PickupsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse403 $pickupV1PickupsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->pickupV1PickupsPostResponse403 = $pickupV1PickupsPostResponse403;
        $this->response = $response;
    }
    public function getPickupV1PickupsPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\PickupV1PickupsPostResponse403
    {
        return $this->pickupV1PickupsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}