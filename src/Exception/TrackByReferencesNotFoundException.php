<?php

namespace AntibodiesOnline\FedEx\Exception;

class TrackByReferencesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse404
     */
    private $trackV1ReferencenumbersPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse404 $trackV1ReferencenumbersPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1ReferencenumbersPostResponse404 = $trackV1ReferencenumbersPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse404() : \AntibodiesOnline\FedEx\Model\TrackV1ReferencenumbersPostResponse404
    {
        return $this->trackV1ReferencenumbersPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}