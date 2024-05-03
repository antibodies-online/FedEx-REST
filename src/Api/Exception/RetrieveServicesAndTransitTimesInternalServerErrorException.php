<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class RetrieveServicesAndTransitTimesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse500
     */
    private $availabilityV1TransittimesPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse500 $availabilityV1TransittimesPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->availabilityV1TransittimesPostResponse500 = $availabilityV1TransittimesPostResponse500;
        $this->response = $response;
    }
    public function getAvailabilityV1TransittimesPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\AvailabilityV1TransittimesPostResponse500
    {
        return $this->availabilityV1TransittimesPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}