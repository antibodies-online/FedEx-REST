<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackByReferencesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse403
     */
    private $trackV1ReferencenumbersPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse403 $trackV1ReferencenumbersPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1ReferencenumbersPostResponse403 = $trackV1ReferencenumbersPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse403() : \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse403
    {
        return $this->trackV1ReferencenumbersPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}