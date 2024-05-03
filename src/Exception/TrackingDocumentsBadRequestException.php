<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class TrackingDocumentsBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse400
     */
    private $trackV1TrackingdocumentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse400 $trackV1TrackingdocumentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1TrackingdocumentsPostResponse400 = $trackV1TrackingdocumentsPostResponse400;
        $this->response = $response;
    }

    public function getTrackV1TrackingdocumentsPostResponse400(): \AntibodiesOnline\FedEx\Model\TrackV1TrackingdocumentsPostResponse400
    {
        return $this->trackV1TrackingdocumentsPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
