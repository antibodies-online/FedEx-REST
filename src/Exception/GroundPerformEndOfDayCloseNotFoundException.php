<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class GroundPerformEndOfDayCloseNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse404
     */
    private $shipV1EndofdayPutResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse404 $shipV1EndofdayPutResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->shipV1EndofdayPutResponse404 = $shipV1EndofdayPutResponse404;
        $this->response = $response;
    }

    public function getShipV1EndofdayPutResponse404(): \AntibodiesOnline\FedEx\Model\ShipV1EndofdayPutResponse404
    {
        return $this->shipV1EndofdayPutResponse404;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
