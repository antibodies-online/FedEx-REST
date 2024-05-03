<?php

namespace AntibodiesOnline\FedEx\Exception;

class FindLocationForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse403
     */
    private $locationV1LocationsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse403 $locationV1LocationsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->locationV1LocationsPostResponse403 = $locationV1LocationsPostResponse403;
        $this->response = $response;
    }
    public function getLocationV1LocationsPostResponse403() : \AntibodiesOnline\FedEx\Model\LocationV1LocationsPostResponse403
    {
        return $this->locationV1LocationsPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}