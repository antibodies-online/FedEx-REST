<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetPackageAndServiceOptionsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse500
     */
    private $availabilityV1PackageandserviceoptionsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse500 $availabilityV1PackageandserviceoptionsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->availabilityV1PackageandserviceoptionsPostResponse500 = $availabilityV1PackageandserviceoptionsPostResponse500;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse500() : \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse500
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}