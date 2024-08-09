<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackByReferencesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse500
     */
    private $trackV1ReferencenumbersPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse500 $trackV1ReferencenumbersPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1ReferencenumbersPostResponse500 = $trackV1ReferencenumbersPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1ReferencenumbersPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\TrackV1ReferencenumbersPostResponse500
    {
        return $this->trackV1ReferencenumbersPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}