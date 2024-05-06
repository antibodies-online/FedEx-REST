<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddress extends \ArrayObject
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
     * Indicate the contact details for this shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact
     */
    protected $contact;
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail
     */
    protected $contactAncillaryDetail;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddress
     */
    protected $address;
    /**
     * specifies additional address details for the physical location
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail
     */
    protected $addressAncillaryDetail;
    /**
     * Indicate the contact details for this shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact
     */
    public function getContact() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail
     */
    public function getContactAncillaryDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail
    {
        return $this->contactAncillaryDetail;
    }
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail $contactAncillaryDetail
     *
     * @return self
     */
    public function setContactAncillaryDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContactAncillaryDetail $contactAncillaryDetail) : self
    {
        $this->initialized['contactAncillaryDetail'] = true;
        $this->contactAncillaryDetail = $contactAncillaryDetail;
        return $this;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddress
     */
    public function getAddress() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * specifies additional address details for the physical location
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail
     */
    public function getAddressAncillaryDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail
    {
        return $this->addressAncillaryDetail;
    }
    /**
     * specifies additional address details for the physical location
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail $addressAncillaryDetail
     *
     * @return self
     */
    public function setAddressAncillaryDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressAddressAncillaryDetail $addressAncillaryDetail) : self
    {
        $this->initialized['addressAncillaryDetail'] = true;
        $this->addressAncillaryDetail = $addressAncillaryDetail;
        return $this;
    }
}