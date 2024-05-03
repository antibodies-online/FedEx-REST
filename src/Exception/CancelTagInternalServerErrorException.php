<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class CancelTagInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500
     */
    private $shipV1ShipmentsTagCancelShipmentidPutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500 $shipV1ShipmentsTagCancelShipmentidPutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsTagCancelShipmentidPutResponse500 = $shipV1ShipmentsTagCancelShipmentidPutResponse500;
        $this->response = $response;
    }

    public function getShipV1ShipmentsTagCancelShipmentidPutResponse500(): \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsTagCancelShipmentidPutResponse500
    {
        return $this->shipV1ShipmentsTagCancelShipmentidPutResponse500;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}