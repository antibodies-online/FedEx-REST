<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient extends \ArrayObject
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
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaddress
     */
    protected $address;
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientcontact
     */
    protected $contact;
    /**
     * Specify the Account number.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaddress
     */
    public function getAddress(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientcontact
     */
    public function getContact(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientcontact
    {
        return $this->contact;
    }
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientcontact $contact
     *
     * @return self
     */
    public function setContact(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the Account number.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber
     */
    public function getAccountNumber(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the Account number.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}