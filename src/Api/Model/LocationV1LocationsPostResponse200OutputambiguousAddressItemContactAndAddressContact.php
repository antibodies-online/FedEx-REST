<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputambiguousAddressItemContactAndAddressContact extends \ArrayObject
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
     * Identifies the contact person's name. Max Length is 70.<br>Example: John Taylor
     *
     * @var string
     */
    protected $personName;
    /**
     * Contact person's email address. Max length is 80.<br>Example: sample@company.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Contact person's phone number. Max length is 15.<br>Example: 1234567890
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Contact person's phone extension. Max length is 6.<br>Example: 91
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * Contact person's fax number. Max length is 15.<br>Example: 956123
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Contact person's company name. Max length is 35.<br>Example: FedEx
     *
     * @var string
     */
    protected $companyName;
    /**
     * State TaxID for the contact person.<br>Example: 12345
     *
     * @var string
     */
    protected $stateTaxId;
    /**
     * Fedral TaxId for the contact person.<br>Example: 11-N-1745
     *
     * @var string
     */
    protected $fedralTaxId;
    /**
     * Identifies the contact person's name. Max Length is 70.<br>Example: John Taylor
     *
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }
    /**
     * Identifies the contact person's name. Max Length is 70.<br>Example: John Taylor
     *
     * @param string $personName
     *
     * @return self
     */
    public function setPersonName(string $personName): self
    {
        $this->initialized['personName'] = true;
        $this->personName = $personName;
        return $this;
    }
    /**
     * Contact person's email address. Max length is 80.<br>Example: sample@company.com
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * Contact person's email address. Max length is 80.<br>Example: sample@company.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Contact person's phone number. Max length is 15.<br>Example: 1234567890
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Contact person's phone number. Max length is 15.<br>Example: 1234567890
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Contact person's phone extension. Max length is 6.<br>Example: 91
     *
     * @return string
     */
    public function getPhoneExtension(): string
    {
        return $this->phoneExtension;
    }
    /**
     * Contact person's phone extension. Max length is 6.<br>Example: 91
     *
     * @param string $phoneExtension
     *
     * @return self
     */
    public function setPhoneExtension(string $phoneExtension): self
    {
        $this->initialized['phoneExtension'] = true;
        $this->phoneExtension = $phoneExtension;
        return $this;
    }
    /**
     * Contact person's fax number. Max length is 15.<br>Example: 956123
     *
     * @return string
     */
    public function getFaxNumber(): string
    {
        return $this->faxNumber;
    }
    /**
     * Contact person's fax number. Max length is 15.<br>Example: 956123
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber(string $faxNumber): self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Contact person's company name. Max length is 35.<br>Example: FedEx
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Contact person's company name. Max length is 35.<br>Example: FedEx
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * State TaxID for the contact person.<br>Example: 12345
     *
     * @return string
     */
    public function getStateTaxId(): string
    {
        return $this->stateTaxId;
    }
    /**
     * State TaxID for the contact person.<br>Example: 12345
     *
     * @param string $stateTaxId
     *
     * @return self
     */
    public function setStateTaxId(string $stateTaxId): self
    {
        $this->initialized['stateTaxId'] = true;
        $this->stateTaxId = $stateTaxId;
        return $this;
    }
    /**
     * Fedral TaxId for the contact person.<br>Example: 11-N-1745
     *
     * @return string
     */
    public function getFedralTaxId(): string
    {
        return $this->fedralTaxId;
    }
    /**
     * Fedral TaxId for the contact person.<br>Example: 11-N-1745
     *
     * @param string $fedralTaxId
     *
     * @return self
     */
    public function setFedralTaxId(string $fedralTaxId): self
    {
        $this->initialized['fedralTaxId'] = true;
        $this->fedralTaxId = $fedralTaxId;
        return $this;
    }
}