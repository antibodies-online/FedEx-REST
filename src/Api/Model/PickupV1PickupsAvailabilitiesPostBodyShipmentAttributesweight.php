<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsAvailabilitiesPostBodyShipmentAttributesweight extends \ArrayObject
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
     * Indicates the type of package weight.
     *
     * @var string
     */
    protected $units;
    /**
     * Indicates the package weight. Maximum length is 99999.<br> Example: 20
     *
     * @var float
     */
    protected $value;
    /**
     * Indicates the type of package weight.
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Indicates the type of package weight.
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
     * Indicates the package weight. Maximum length is 99999.<br> Example: 20
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Indicates the package weight. Maximum length is 99999.<br> Example: 20
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