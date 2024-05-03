<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class AddOpenShipmentPackagesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse503
     */
    private $shipV1OpenshipmentsPackagesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse503 $shipV1OpenshipmentsPackagesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->shipV1OpenshipmentsPackagesPostResponse503 = $shipV1OpenshipmentsPackagesPostResponse503;
        $this->response = $response;
    }

    public function getShipV1OpenshipmentsPackagesPostResponse503(): \AntibodiesOnline\FedEx\Model\ShipV1OpenshipmentsPackagesPostResponse503
    {
        return $this->shipV1OpenshipmentsPackagesPostResponse503;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
