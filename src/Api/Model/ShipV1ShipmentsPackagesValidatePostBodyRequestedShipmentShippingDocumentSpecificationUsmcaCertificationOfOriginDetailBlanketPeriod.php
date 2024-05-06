<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetailBlanketPeriod extends \ArrayObject
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
     *
     * @return string
     */
    public function getBegins() : string
    {
        return $this->begins;
    }
    /**
     * Indicates the start date.
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
     * Indicates the end date.
     *
     * @return string
     */
    public function getEnds() : string
    {
        return $this->ends;
    }
    /**
     * Indicates the end date.
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