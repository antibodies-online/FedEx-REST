<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact extends \ArrayObject
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
     * Specify contact person name.<br>Recommended length is 70. <br><br>Note: There's no specific validation for the person name.<br> Example: John Taylor
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
     * Specify contact phone number. <br><br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify contact phone extension. <br>Note: Recommended length is 6. There's no specific validation for the phone extension. <br> Example: 1234
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * Specify contact fax number.<br>Note: Recommended length is 15. There's no specific validation for the fax number.<br> Example: 1234567890
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Specify contact person name.<br>Recommended length is 70. <br><br>Note: There's no specific validation for the person name.<br> Example: John Taylor
     *
     * @return string
     */
    public function getPersonName() : string
    {
        return $this->personName;
    }
    /**
     * Specify contact person name.<br>Recommended length is 70. <br><br>Note: There's no specific validation for the person name.<br> Example: John Taylor
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
     * Specify contact phone number. <br><br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Specify contact phone number. <br><br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
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
     * Specify contact phone extension. <br>Note: Recommended length is 6. There's no specific validation for the phone extension. <br> Example: 1234
     *
     * @return string
     */
    public function getPhoneExtension() : string
    {
        return $this->phoneExtension;
    }
    /**
     * Specify contact phone extension. <br>Note: Recommended length is 6. There's no specific validation for the phone extension. <br> Example: 1234
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
     * Specify contact fax number.<br>Note: Recommended length is 15. There's no specific validation for the fax number.<br> Example: 1234567890
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Specify contact fax number.<br>Note: Recommended length is 15. There's no specific validation for the fax number.<br> Example: 1234567890
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
     * Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
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