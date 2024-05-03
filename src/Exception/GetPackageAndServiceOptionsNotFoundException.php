<?php

namespace AntibodiesOnline\FedEx\Exception;

class GetPackageAndServiceOptionsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse404
     */
    private $availabilityV1PackageandserviceoptionsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse404 $availabilityV1PackageandserviceoptionsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->availabilityV1PackageandserviceoptionsPostResponse404 = $availabilityV1PackageandserviceoptionsPostResponse404;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse404() : \AntibodiesOnline\FedEx\Model\AvailabilityV1PackageandserviceoptionsPostResponse404
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}