<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetSpecialServiceOptionsForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse403
     */
    private $availabilityV1SpecialserviceoptionsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse403 $availabilityV1SpecialserviceoptionsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->availabilityV1SpecialserviceoptionsPostResponse403 = $availabilityV1SpecialserviceoptionsPostResponse403;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse403
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}