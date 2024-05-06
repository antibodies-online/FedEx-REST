<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBodyShipmentAttributesweight extends \ArrayObject
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
     * Indicates the type of package weight.<br> Example: KG
     *
     * @var string
     */
    protected $units;
    /**
     * Weight Value.<br> Example: 68.25<br><a onclick='loadDocReference("packagetypes")'>Click here to see Weight Values</a>
     *
     * @var float
     */
    protected $value;
    /**
     * Indicates the type of package weight.<br> Example: KG
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Indicates the type of package weight.<br> Example: KG
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
     * Weight Value.<br> Example: 68.25<br><a onclick='loadDocReference("packagetypes")'>Click here to see Weight Values</a>
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Weight Value.<br> Example: 68.25<br><a onclick='loadDocReference("packagetypes")'>Click here to see Weight Values</a>
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