<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipient extends \ArrayObject
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
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientContact
     */
    protected $contact;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAddress
     */
    public function getAddress() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAddress $address
     *
     * @return self
     */
    public function setAddress(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientContact
     */
    public function getContact() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientContact $contact
     *
     * @return self
     */
    public function setContact(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAccountNumber
     */
    public function getAccountNumber() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailcodRecipientAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}