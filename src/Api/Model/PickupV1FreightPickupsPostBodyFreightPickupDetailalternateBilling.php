<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBilling extends \ArrayObject
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
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingcontact
     */
    protected $contact;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaddress
     */
    public function getAddress() : PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaddress $address
     *
     * @return self
     */
    public function setAddress(PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingcontact
     */
    public function getContact() : PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingcontact $contact
     *
     * @return self
     */
    public function setContact(PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaccountNumber
     */
    public function getAccountNumber() : PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(PickupV1FreightPickupsPostBodyFreightPickupDetailalternateBillingaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}