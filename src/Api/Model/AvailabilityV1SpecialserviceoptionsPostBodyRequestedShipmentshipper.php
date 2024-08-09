<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper extends \ArrayObject
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
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress
     */
    protected $address;
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshippercontact
     */
    protected $contact;
    /**
     * Specify the Account number.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress
     */
    public function getAddress(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshippercontact
     */
    public function getContact(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshippercontact
    {
        return $this->contact;
    }
    /**
     * Contact details for the Party such as Name, Email, PhoneNumber
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshippercontact $contact
     *
     * @return self
     */
    public function setContact(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshippercontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the Account number.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaccountNumber
     */
    public function getAccountNumber(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the Account number.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}