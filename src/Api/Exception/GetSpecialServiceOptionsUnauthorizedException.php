<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class GetSpecialServiceOptionsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse401
     */
    private $availabilityV1SpecialserviceoptionsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse401 $availabilityV1SpecialserviceoptionsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->availabilityV1SpecialserviceoptionsPostResponse401 = $availabilityV1SpecialserviceoptionsPostResponse401;
        $this->response = $response;
    }
    public function getAvailabilityV1SpecialserviceoptionsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1SpecialserviceoptionsPostResponse401
    {
        return $this->availabilityV1SpecialserviceoptionsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}