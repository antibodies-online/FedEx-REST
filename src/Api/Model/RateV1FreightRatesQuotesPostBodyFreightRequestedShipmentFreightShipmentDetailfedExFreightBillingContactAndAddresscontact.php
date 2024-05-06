<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddresscontact extends \ArrayObject
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
     * Specify contact name.<br>Note: Recommended Length is 70. There's no specific validation for the length.<br> Example: John Taylor
     *
     * @var string
     */
    protected $personName;
    /**
     * Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specify contact phone number. Maximum length is 15. <br> Example: 1234567890
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * Specify contact fax number. Maximum length is 15. <br> Example: 1234567890
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Specify contact company name. Maximum length is 35.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Specify contact name.<br>Note: Recommended Length is 70. There's no specific validation for the length.<br> Example: John Taylor
     *
     * @return string
     */
    public function getPersonName() : string
    {
        return $this->personName;
    }
    /**
     * Specify contact name.<br>Note: Recommended Length is 70. There's no specific validation for the length.<br> Example: John Taylor
     *
     * @param string $personName
     *
     * @return self
     */
    public function setPersonName(string $personName) : self
    {
        $this->initialized['personName'] = true;
        $this->personName = $personName;
        return $this;
    }
    /**
     * Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Specify contact phone number. Maximum length is 15. <br> Example: 1234567890
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Specify contact phone number. Maximum length is 15. <br> Example: 1234567890
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     *
     * @return string
     */
    public function getPhoneExtension() : string
    {
        return $this->phoneExtension;
    }
    /**
     * Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     *
     * @param string $phoneExtension
     *
     * @return self
     */
    public function setPhoneExtension(string $phoneExtension) : self
    {
        $this->initialized['phoneExtension'] = true;
        $this->phoneExtension = $phoneExtension;
        return $this;
    }
    /**
     * Specify contact fax number. Maximum length is 15. <br> Example: 1234567890
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Specify contact fax number. Maximum length is 15. <br> Example: 1234567890
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber(string $faxNumber) : self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Specify contact company name. Maximum length is 35.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Specify contact company name. Maximum length is 35.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
}