<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipper extends \ArrayObject
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
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipperaddress
     */
    protected $address;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipperaddress
     */
    public function getAddress() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipperaddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within  the US). Country code is required.  Postal code is required for postal aware countries.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipperaddress $address
     *
     * @return self
     */
    public function setAddress(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShipperaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}