<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates the start date.
     *
     * @var string
     */
    protected $begins;
    /**
     * Indicates the end date.
     *
     * @var string
     */
    protected $ends;

    /**
     * Indicates the start date.
     */
    public function getBegins(): string
    {
        return $this->begins;
    }

    /**
     * Indicates the start date.
     */
    public function setBegins(string $begins): self
    {
        $this->initialized['begins'] = true;
        $this->begins = $begins;

        return $this;
    }

    /**
     * Indicates the end date.
     */
    public function getEnds(): string
    {
        return $this->ends;
    }

    /**
     * Indicates the end date.
     */
    public function setEnds(string $ends): self
    {
        $this->initialized['ends'] = true;
        $this->ends = $ends;

        return $this;
    }
}