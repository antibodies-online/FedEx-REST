<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByReferencesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse401
     */
    private $trackV1ReferencenumbersPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse401 $trackV1ReferencenumbersPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1ReferencenumbersPostResponse401 = $trackV1ReferencenumbersPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse401
    {
        return $this->trackV1ReferencenumbersPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}