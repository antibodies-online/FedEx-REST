<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient extends \ArrayObject
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
     * 
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    protected $address;
    /**
     * 
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    protected $contact;
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaccountNumber
     */
    protected $accountNumber;
    /**
     * 
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    public function getAddress() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    public function getContact() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaccountNumber
     */
    public function getAccountNumber() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}