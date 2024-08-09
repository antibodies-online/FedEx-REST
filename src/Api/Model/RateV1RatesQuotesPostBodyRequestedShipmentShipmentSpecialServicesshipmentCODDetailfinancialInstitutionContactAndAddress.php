<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddress extends \ArrayObject
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
     * Indicate the contact details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressContact
     */
    protected $contact;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries. State or province code is mandatory for Puerto Rico.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressAddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressContact
     */
    public function getContact(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressContact $contact
     *
     * @return self
     */
    public function setContact(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries. State or province code is mandatory for Puerto Rico.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressAddress
     */
    public function getAddress(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries. State or province code is mandatory for Puerto Rico.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressAddress $address
     *
     * @return self
     */
    public function setAddress(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailfinancialInstitutionContactAndAddressAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}