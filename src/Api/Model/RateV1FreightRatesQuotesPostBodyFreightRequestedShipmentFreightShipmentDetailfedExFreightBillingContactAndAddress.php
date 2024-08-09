<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddress extends \ArrayObject
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
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact
     */
    protected $contact;
    /**
     * 
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress
     */
    protected $address;
    /**
     * Indicate the contact details.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact
     */
    public function getContact(): RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact $contact
     *
     * @return self
     */
    public function setContact(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress
     */
    public function getAddress(): RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress $address
     *
     * @return self
     */
    public function setAddress(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}