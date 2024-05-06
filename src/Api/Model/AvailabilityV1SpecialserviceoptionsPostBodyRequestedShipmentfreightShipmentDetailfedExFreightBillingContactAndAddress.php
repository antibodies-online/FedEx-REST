<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddress extends \ArrayObject
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
     * Billing contact information for FedEx Freight Shipment.
     *
     * @var mixed
     */
    protected $contact;
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail
     */
    protected $contactAncillaryDetail;
    /**
     * Billing address information for FedEx Freight Shipment.
     *
     * @var mixed
     */
    protected $address;
    /**
     * specifies additional address details for the physical location
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail
     */
    protected $addressAncillaryDetail;
    /**
     * Billing contact information for FedEx Freight Shipment.
     *
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Billing contact information for FedEx Freight Shipment.
     *
     * @param mixed $contact
     *
     * @return self
     */
    public function setContact($contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail
     */
    public function getContactAncillaryDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail
    {
        return $this->contactAncillaryDetail;
    }
    /**
     * Indicate additional contact details such as email and phone information.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail $contactAncillaryDetail
     *
     * @return self
     */
    public function setContactAncillaryDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail $contactAncillaryDetail) : self
    {
        $this->initialized['contactAncillaryDetail'] = true;
        $this->contactAncillaryDetail = $contactAncillaryDetail;
        return $this;
    }
    /**
     * Billing address information for FedEx Freight Shipment.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Billing address information for FedEx Freight Shipment.
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * specifies additional address details for the physical location
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail
     */
    public function getAddressAncillaryDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail
    {
        return $this->addressAncillaryDetail;
    }
    /**
     * specifies additional address details for the physical location
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail $addressAncillaryDetail
     *
     * @return self
     */
    public function setAddressAncillaryDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddressaddressAncillaryDetail $addressAncillaryDetail) : self
    {
        $this->initialized['addressAncillaryDetail'] = true;
        $this->addressAncillaryDetail = $addressAncillaryDetail;
        return $this;
    }
}