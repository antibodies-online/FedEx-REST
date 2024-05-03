<?php

namespace AntibodiesOnline\FedEx\Exception;

class FindLocationNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse404
     */
    private $locationV1LocationsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse404 $locationV1LocationsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->locationV1LocationsPostResponse404 = $locationV1LocationsPostResponse404;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse404() : \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse404
    {
        return $this->locationV1LocationsPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}