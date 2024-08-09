<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetaillineItemItemVolume extends \ArrayObject
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
     * The unit is in Cubic Feet or Cubic Meters. <br> Example: CUBIC_FT
     *
     * @var string
     */
    protected $units;
    /**
     * The amount of volume. <br> Example: 9.965781217890562
     *
     * @var float
     */
    protected $value;
    /**
     * The unit is in Cubic Feet or Cubic Meters. <br> Example: CUBIC_FT
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * The unit is in Cubic Feet or Cubic Meters. <br> Example: CUBIC_FT
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
     * The amount of volume. <br> Example: 9.965781217890562
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * The amount of volume. <br> Example: 9.965781217890562
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