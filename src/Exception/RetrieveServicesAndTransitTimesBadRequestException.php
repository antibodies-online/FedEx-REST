<?php

namespace AntibodiesOnline\FedEx\Exception;

class RetrieveServicesAndTransitTimesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse400
     */
    private $availabilityV1TransittimesPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse400 $availabilityV1TransittimesPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->availabilityV1TransittimesPostResponse400 = $availabilityV1TransittimesPostResponse400;
        $this->response = $response;
    }
    public function getAvailabilityV1TransittimesPostResponse400() : \AntibodiesOnline\FedEx\Model\AvailabilityV1TransittimesPostResponse400
    {
        return $this->availabilityV1TransittimesPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}