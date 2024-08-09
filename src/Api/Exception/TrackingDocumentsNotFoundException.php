<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse404
     */
    private $trackV1TrackingdocumentsPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse404 $trackV1TrackingdocumentsPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->trackV1TrackingdocumentsPostResponse404 = $trackV1TrackingdocumentsPostResponse404;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse404
    {
        return $this->trackV1TrackingdocumentsPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}