<?php

namespace AntibodiesOnline\FedEx\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDistance extends \ArrayObject
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
     * Indicates the unit of measure for the distance value.
     *
     * @var string
     */
    protected $units;
    /**
     * Indicates the distance quantity.
     *
     * @var float
     */
    protected $value;
    /**
     * Indicates the unit of measure for the distance value.
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Indicates the unit of measure for the distance value.
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
     * Indicates the distance quantity.
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Indicates the distance quantity.
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