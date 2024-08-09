<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class FindLocationBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse400
     */
    private $locationV1LocationsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse400 $locationV1LocationsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->locationV1LocationsPostResponse400 = $locationV1LocationsPostResponse400;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\LocationV1LocationsPostResponse400
    {
        return $this->locationV1LocationsPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}