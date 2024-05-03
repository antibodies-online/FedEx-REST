<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class TrackByTrackingNumberBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse400
     */
    private $trackV1TrackingnumbersPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse400 $trackV1TrackingnumbersPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->trackV1TrackingnumbersPostResponse400 = $trackV1TrackingnumbersPostResponse400;
        $this->response = $response;
    }

    public function getTrackV1TrackingnumbersPostResponse400(): \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse400
    {
        return $this->trackV1TrackingnumbersPostResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}