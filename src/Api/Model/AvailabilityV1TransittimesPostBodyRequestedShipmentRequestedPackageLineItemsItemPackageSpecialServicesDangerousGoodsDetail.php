<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesDangerousGoodsDetail extends \ArrayObject
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
     * Dangerous Goods Accessibility Type. Inaccessible means it does not have to be accessable on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @var string
     */
    protected $accessibility;
    /**
    * Optional
    
    Specify the dangerous goods' detail from the list of available options.
    *
    * @var list<string>
    */
    protected $options;
    /**
     * Dangerous Goods Accessibility Type. Inaccessible means it does not have to be accessable on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @return string
     */
    public function getAccessibility() : string
    {
        return $this->accessibility;
    }
    /**
     * Dangerous Goods Accessibility Type. Inaccessible means it does not have to be accessable on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     *
     * @param string $accessibility
     *
     * @return self
     */
    public function setAccessibility(string $accessibility) : self
    {
        $this->initialized['accessibility'] = true;
        $this->accessibility = $accessibility;
        return $this;
    }
    /**
    * Optional
    
    Specify the dangerous goods' detail from the list of available options.
    *
    * @return list<string>
    */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
    * Optional
    
    Specify the dangerous goods' detail from the list of available options.
    *
    * @param list<string> $options
    *
    * @return self
    */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}