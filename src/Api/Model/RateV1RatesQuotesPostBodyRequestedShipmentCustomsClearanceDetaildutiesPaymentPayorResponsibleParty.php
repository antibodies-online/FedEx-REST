<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsibleParty extends \ArrayObject
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
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartyaddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartycontact
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
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartyaddress
     */
    public function getAddress() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartyaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartyaddress $address
     *
     * @return self
     */
    public function setAddress(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartyaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartycontact
     */
    public function getContact() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartycontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartycontact $contact
     *
     * @return self
     */
    public function setContact(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayorResponsiblePartycontact $contact) : self
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