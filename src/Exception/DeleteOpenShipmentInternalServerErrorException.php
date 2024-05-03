<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class DeleteOpenShipmentInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse500
     */
    private $shipV1OpenshipmentsDeletePutResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse500 $shipV1OpenshipmentsDeletePutResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->shipV1OpenshipmentsDeletePutResponse500 = $shipV1OpenshipmentsDeletePutResponse500;
        $this->response = $response;
    }

    public function getShipV1OpenshipmentsDeletePutResponse500(): \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsDeletePutResponse500
    {
        return $this->shipV1OpenshipmentsDeletePutResponse500;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
