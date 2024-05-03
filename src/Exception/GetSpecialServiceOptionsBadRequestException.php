<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetSpecialServiceOptionsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse400
     */
    private $availabilityV1SpecialserviceoptionsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse400 $availabilityV1SpecialserviceoptionsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->availabilityV1SpecialserviceoptionsPostResponse400 = $availabilityV1SpecialserviceoptionsPostResponse400;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse400() : \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse400
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}