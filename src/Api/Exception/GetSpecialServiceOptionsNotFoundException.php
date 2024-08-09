<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetSpecialServiceOptionsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse404
     */
    private $availabilityV1SpecialserviceoptionsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse404 $availabilityV1SpecialserviceoptionsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->availabilityV1SpecialserviceoptionsPostResponse404 = $availabilityV1SpecialserviceoptionsPostResponse404;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse404
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}