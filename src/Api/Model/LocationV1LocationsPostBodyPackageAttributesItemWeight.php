<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyPackageAttributesItemWeight extends \ArrayObject
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
     * Specify the weighing unit of the package.
     *
     * @var string
     */
    protected $units;
    /**
     * This is package weight. Max. Length is 99999.
     *
     * @var float
     */
    protected $value;
    /**
     * Specify the weighing unit of the package.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Specify the weighing unit of the package.
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
     * This is package weight. Max. Length is 99999.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * This is package weight. Max. Length is 99999.
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