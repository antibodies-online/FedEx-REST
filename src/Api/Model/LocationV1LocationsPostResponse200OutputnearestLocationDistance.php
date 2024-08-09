<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputnearestLocationDistance extends \ArrayObject
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
     * Indicates the unit of measure for the distance.
     *
     * @var string
     */
    protected $units;
    /**
     * Specifies the distance value.<br>Example: 3.5
     *
     * @var float
     */
    protected $value;
    /**
     * Indicates the unit of measure for the distance.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Indicates the unit of measure for the distance.
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
    /**
     * Specifies the distance value.<br>Example: 3.5
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Specifies the distance value.<br>Example: 3.5
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}