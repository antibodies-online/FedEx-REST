<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetPackageAndServiceOptionsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse401
     */
    private $availabilityV1PackageandserviceoptionsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse401 $availabilityV1PackageandserviceoptionsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->availabilityV1PackageandserviceoptionsPostResponse401 = $availabilityV1PackageandserviceoptionsPostResponse401;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse401
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}