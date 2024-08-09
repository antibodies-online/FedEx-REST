<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse401
     */
    private $trackV1TrackingdocumentsPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse401 $trackV1TrackingdocumentsPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->trackV1TrackingdocumentsPostResponse401 = $trackV1TrackingdocumentsPostResponse401;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse401
    {
        return $this->trackV1TrackingdocumentsPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}