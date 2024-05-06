<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates the start date.<br>Example: 12-01-2020
     *
     * @var string
     */
    protected $begins;
    /**
     * Indicates the end date.<br>Example: 12-01-2020
     *
     * @var string
     */
    protected $ends;
    /**
     * Indicates the start date.<br>Example: 12-01-2020
     *
     * @return string
     */
    public function getBegins() : string
    {
        return $this->begins;
    }
    /**
     * Indicates the start date.<br>Example: 12-01-2020
     *
     * @param string $begins
     *
     * @return self
     */
    public function setBegins(string $begins) : self
    {
        $this->initialized['begins'] = true;
        $this->begins = $begins;
        return $this;
    }
    /**
     * Indicates the end date.<br>Example: 12-01-2020
     *
     * @return string
     */
    public function getEnds() : string
    {
        return $this->ends;
    }
    /**
     * Indicates the end date.<br>Example: 12-01-2020
     *
     * @param string $ends
     *
     * @return self
     */
    public function setEnds(string $ends) : self
    {
        $this->initialized['ends'] = true;
        $this->ends = $ends;
        return $this;
    }
}