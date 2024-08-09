<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetail extends \ArrayObject
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
     * These are contact email addresses.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem>
     */
    protected $emailAddresses;
    /**
     * Specify the Prefix.
     *
     * @var string
     */
    protected $prefix;
    /**
     * Phone Number Details
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem>
     */
    protected $phoneNumberDetails;
    /**
     * Use this to provide Company details.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailCompanyName
     */
    protected $companyName;
    /**
     * Indicate the contact title.
     *
     * @var string
     */
    protected $title;
    /**
     * These are contact email addresses.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem>
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }
    /**
     * These are contact email addresses.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailEmailAddressesItem> $emailAddresses
     *
     * @return self
     */
    public function setEmailAddresses(array $emailAddresses): self
    {
        $this->initialized['emailAddresses'] = true;
        $this->emailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Specify the Prefix.
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * Specify the Prefix.
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Phone Number Details
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem>
     */
    public function getPhoneNumberDetails(): array
    {
        return $this->phoneNumberDetails;
    }
    /**
     * Phone Number Details
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItem> $phoneNumberDetails
     *
     * @return self
     */
    public function setPhoneNumberDetails(array $phoneNumberDetails): self
    {
        $this->initialized['phoneNumberDetails'] = true;
        $this->phoneNumberDetails = $phoneNumberDetails;
        return $this;
    }
    /**
     * Use this to provide Company details.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailCompanyName
     */
    public function getCompanyName(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailCompanyName
    {
        return $this->companyName;
    }
    /**
     * Use this to provide Company details.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailCompanyName $companyName
     *
     * @return self
     */
    public function setCompanyName(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailCompanyName $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Indicate the contact title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Indicate the contact title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}