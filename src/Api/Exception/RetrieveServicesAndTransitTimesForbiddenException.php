<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveServicesAndTransitTimesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse403
     */
    private $availabilityV1TransittimesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse403 $availabilityV1TransittimesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->availabilityV1TransittimesPostResponse403 = $availabilityV1TransittimesPostResponse403;
        $this->response = $response;
    }
    public function getAvailabilityV1TransittimesPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse403
    {
        return $this->availabilityV1TransittimesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}