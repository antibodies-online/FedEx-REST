<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse503
     */
    private $trackV1TrackingdocumentsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse503 $trackV1TrackingdocumentsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->trackV1TrackingdocumentsPostResponse503 = $trackV1TrackingdocumentsPostResponse503;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse503() : \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse503
    {
        return $this->trackV1TrackingdocumentsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}