<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressContact
     */
    protected $contact;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressAddress
     */
    public function getAddress(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressContact
     */
    public function getContact(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddressContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
}