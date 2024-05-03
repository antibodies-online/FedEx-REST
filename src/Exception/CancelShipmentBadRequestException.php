<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class CancelShipmentBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse400
     */
    private $shipV1ShipmentsCancelPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse400 $shipV1ShipmentsCancelPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->shipV1ShipmentsCancelPutResponse400 = $shipV1ShipmentsCancelPutResponse400;
        $this->response = $response;
    }

    public function getShipV1ShipmentsCancelPutResponse400(): \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsCancelPutResponse400
    {
        return $this->shipV1ShipmentsCancelPutResponse400;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}