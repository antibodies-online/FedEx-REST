<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse403
     */
    private $trackV1TrackingdocumentsPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse403 $trackV1TrackingdocumentsPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1TrackingdocumentsPostResponse403 = $trackV1TrackingdocumentsPostResponse403;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse403
    {
        return $this->trackV1TrackingdocumentsPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}