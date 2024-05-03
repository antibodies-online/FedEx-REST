<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetSpecialServiceOptionsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse400
     */
    private $availabilityV1SpecialserviceoptionsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse400 $availabilityV1SpecialserviceoptionsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->availabilityV1SpecialserviceoptionsPostResponse400 = $availabilityV1SpecialserviceoptionsPostResponse400;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse400
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}