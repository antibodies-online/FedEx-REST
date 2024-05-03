<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetPackageAndServiceOptionsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse400
     */
    private $availabilityV1PackageandserviceoptionsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse400 $availabilityV1PackageandserviceoptionsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->availabilityV1PackageandserviceoptionsPostResponse400 = $availabilityV1PackageandserviceoptionsPostResponse400;
        $this->response = $response;
    }
    public function getAvailabilityV1PackageandserviceoptionsPostResponse400() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1PackageandserviceoptionsPostResponse400
    {
        return $this->availabilityV1PackageandserviceoptionsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}