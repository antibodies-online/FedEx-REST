<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackByReferencesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse400
     */
    private $trackV1ReferencenumbersPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse400 $trackV1ReferencenumbersPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1ReferencenumbersPostResponse400 = $trackV1ReferencenumbersPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse400() : \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse400
    {
        return $this->trackV1ReferencenumbersPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}