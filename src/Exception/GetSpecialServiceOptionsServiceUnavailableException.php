<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetSpecialServiceOptionsServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse503
     */
    private $availabilityV1SpecialserviceoptionsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse503 $availabilityV1SpecialserviceoptionsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->availabilityV1SpecialserviceoptionsPostResponse503 = $availabilityV1SpecialserviceoptionsPostResponse503;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse503() : \AntibodiesOnline\FedEx\Model\AvailabilityV1SpecialserviceoptionsPostResponse503
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}