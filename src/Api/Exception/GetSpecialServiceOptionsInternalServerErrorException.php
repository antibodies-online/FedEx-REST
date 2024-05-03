<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetSpecialServiceOptionsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse500
     */
    private $availabilityV1SpecialserviceoptionsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse500 $availabilityV1SpecialserviceoptionsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->availabilityV1SpecialserviceoptionsPostResponse500 = $availabilityV1SpecialserviceoptionsPostResponse500;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse500
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}