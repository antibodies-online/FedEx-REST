<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight extends \ArrayObject
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
     * Specify the unit of measurement used to  weigh the package. For Dry Ice the unit of measure is KG.
     *
     * @var string
     */
    protected $units;
    /**
     * Specify the value of the weight of the package.<br> Example: 68.25
     *
     * @var float
     */
    protected $value;
    /**
     * Specify the unit of measurement used to  weigh the package. For Dry Ice the unit of measure is KG.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Specify the unit of measurement used to  weigh the package. For Dry Ice the unit of measure is KG.
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
     * Specify the value of the weight of the package.<br> Example: 68.25
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Specify the value of the weight of the package.<br> Example: 68.25
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