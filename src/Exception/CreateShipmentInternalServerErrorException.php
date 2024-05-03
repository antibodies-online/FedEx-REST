<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class CreateShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse500
     */
    private $shipV1ShipmentsPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse500 $shipV1ShipmentsPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1ShipmentsPostResponse500 = $shipV1ShipmentsPostResponse500;
        $this->response = $response;
    }

    public function getShipV1ShipmentsPostResponse500(): \AntibodiesOnline\FedEx\Model\ShipV1ShipmentsPostResponse500
    {
        return $this->shipV1ShipmentsPostResponse500;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
