<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveServicesAndTransitTimesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse401
     */
    private $availabilityV1TransittimesPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse401 $availabilityV1TransittimesPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->availabilityV1TransittimesPostResponse401 = $availabilityV1TransittimesPostResponse401;
        $this->response = $response;
    }
    public function getAvailabilityV1TransittimesPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse401
    {
        return $this->availabilityV1TransittimesPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}