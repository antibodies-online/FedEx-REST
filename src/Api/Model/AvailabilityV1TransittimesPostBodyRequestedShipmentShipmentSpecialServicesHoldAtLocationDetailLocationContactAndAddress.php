<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress extends \ArrayObject
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
     * Specify the Hold at location contact details.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContact
     */
    protected $contact;
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressAddress
     */
    protected $address;
    /**
     * Specify the Hold at location contact details.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContact
     */
    public function getContact(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Specify the Hold at location contact details.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressAddress
     */
    public function getAddress(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressAddress
    {
        return $this->address;
    }
    /**
     * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}