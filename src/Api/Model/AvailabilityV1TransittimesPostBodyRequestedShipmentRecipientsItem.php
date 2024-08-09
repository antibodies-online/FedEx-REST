<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem extends \ArrayObject
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
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress
     */
    protected $address;
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress
     */
    public function getAddress(): AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress
    {
        return $this->address;
    }
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}