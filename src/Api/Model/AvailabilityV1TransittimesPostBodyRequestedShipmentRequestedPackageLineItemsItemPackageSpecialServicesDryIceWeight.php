<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDryIceWeight extends \ArrayObject
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
     * Specify the unit of measurement used to weigh the dry ice used in packaging.
     *
     * @var string
     */
    protected $units;
    /**
     * Specify the value of weight of dry ice used in packaging. <br> Example: 10.0
     *
     * @var float
     */
    protected $value;
    /**
     * Specify the unit of measurement used to weigh the dry ice used in packaging.
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Specify the unit of measurement used to weigh the dry ice used in packaging.
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
     * Specify the value of weight of dry ice used in packaging. <br> Example: 10.0
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Specify the value of weight of dry ice used in packaging. <br> Example: 10.0
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