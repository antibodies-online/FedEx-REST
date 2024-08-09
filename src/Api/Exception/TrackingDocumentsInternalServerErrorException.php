<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class TrackingDocumentsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse500
     */
    private $trackV1TrackingdocumentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse500 $trackV1TrackingdocumentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->trackV1TrackingdocumentsPostResponse500 = $trackV1TrackingdocumentsPostResponse500;
        $this->response = $response;
    }
    public function getTrackV1TrackingdocumentsPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\TrackV1TrackingdocumentsPostResponse500
    {
        return $this->trackV1TrackingdocumentsPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}