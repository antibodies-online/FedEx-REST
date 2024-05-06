<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight extends \ArrayObject
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
     * Identifies the unit of measure associated with a weight value. <br> Example: LB
     *
     * @var string
     */
    protected $units;
    /**
     * Identifies the weight <br> Example: 10.0
     *
     * @var float
     */
    protected $value;
    /**
     * Identifies the unit of measure associated with a weight value. <br> Example: LB
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Identifies the unit of measure associated with a weight value. <br> Example: LB
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
     * Identifies the weight <br> Example: 10.0
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Identifies the weight <br> Example: 10.0
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