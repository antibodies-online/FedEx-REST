<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class TrackByTrackingNumberForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse403
     */
    private $trackV1TrackingnumbersPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse403 $trackV1TrackingnumbersPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->trackV1TrackingnumbersPostResponse403 = $trackV1TrackingnumbersPostResponse403;
        $this->response = $response;
    }

    public function getTrackV1TrackingnumbersPostResponse403(): \AntibodiesOnline\FedEx\Model\TrackV1TrackingnumbersPostResponse403
    {
        return $this->trackV1TrackingnumbersPostResponse403;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
