<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemWeight extends \ArrayObject
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
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     *
     * @var string
     */
    protected $units;
    /**
     * Weight Value.<br> Example: 68.25
     *
     * @var float
     */
    protected $value;
    /**
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
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
     * Weight Value.<br> Example: 68.25
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Weight Value.<br> Example: 68.25
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