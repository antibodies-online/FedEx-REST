<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetPackageAndServiceOptionsForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse403
     */
    private $availabilityV1PackageandserviceoptionsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse403 $availabilityV1PackageandserviceoptionsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->availabilityV1PackageandserviceoptionsPostResponse403 = $availabilityV1PackageandserviceoptionsPostResponse403;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse403
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}