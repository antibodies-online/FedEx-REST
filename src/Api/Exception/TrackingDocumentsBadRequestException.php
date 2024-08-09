<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse400
     */
    private $trackV1TrackingdocumentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse400 $trackV1TrackingdocumentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1TrackingdocumentsPostResponse400 = $trackV1TrackingdocumentsPostResponse400;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse400
    {
        return $this->trackV1TrackingdocumentsPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}