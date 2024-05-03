<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByReferencesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse503
     */
    private $trackV1ReferencenumbersPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse503 $trackV1ReferencenumbersPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1ReferencenumbersPostResponse503 = $trackV1ReferencenumbersPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse503
    {
        return $this->trackV1ReferencenumbersPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}