<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetaillineItemItemWeight extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $units;
    /**
     * 
     *
     * @var float
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * 
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units) : self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}