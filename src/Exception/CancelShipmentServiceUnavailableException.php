<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class CancelShipmentServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse503
     */
    private $shipV1ShipmentsCancelPutResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse503 $shipV1ShipmentsCancelPutResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1ShipmentsCancelPutResponse503 = $shipV1ShipmentsCancelPutResponse503;
        $this->response = $response;
    }

    public function getShipV1ShipmentsCancelPutResponse503(): \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse503
    {
        return $this->shipV1ShipmentsCancelPutResponse503;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}