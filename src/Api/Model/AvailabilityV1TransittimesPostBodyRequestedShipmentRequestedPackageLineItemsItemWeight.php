<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemWeight extends \ArrayObject
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
     * Specify the unit of measurement used to weigh. <br> Example: LB
     *
     * @var string
     */
    protected $units;
    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
     *
     * @var float
     */
    protected $value;
    /**
     * Specify the unit of measurement used to weigh. <br> Example: LB
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Specify the unit of measurement used to weigh. <br> Example: LB
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
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
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