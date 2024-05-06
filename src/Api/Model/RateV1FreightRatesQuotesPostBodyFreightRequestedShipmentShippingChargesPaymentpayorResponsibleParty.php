<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsibleParty extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartycontact
     */
    protected $contact;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress
     */
    public function getAddress() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress $address
     *
     * @return self
     */
    public function setAddress(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartycontact
     */
    public function getContact() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartycontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartycontact $contact
     *
     * @return self
     */
    public function setContact(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartycontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getAccountNumber() : iterable
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param array<string, mixed> $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(iterable $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}