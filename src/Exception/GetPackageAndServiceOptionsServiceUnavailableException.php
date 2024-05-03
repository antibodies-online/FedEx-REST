<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetPackageAndServiceOptionsServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse503
     */
    private $availabilityV1PackageandserviceoptionsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse503 $availabilityV1PackageandserviceoptionsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->availabilityV1PackageandserviceoptionsPostResponse503 = $availabilityV1PackageandserviceoptionsPostResponse503;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse503() : \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse503
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}