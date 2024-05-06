<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipientcontact extends \ArrayObject
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
     * This is a placeholder for company name. Maximum length is 35.
     *
     * @var string
     */
    protected $companyName;
    /**
     * This is a placeholder for Fax number. Maximum length is 15.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * This is a placeholder for contact person's name. Maximum Length is 70.
     *
     * @var string
     */
    protected $personName;
    /**
     * This is a placeholder for phone number associated with this contact. Maximum length is 15.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * This is a placeholder for company name. Maximum length is 35.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * This is a placeholder for company name. Maximum length is 35.
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
    /**
     * This is a placeholder for Fax number. Maximum length is 15.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * This is a placeholder for Fax number. Maximum length is 15.
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
     * This is a placeholder for contact person's name. Maximum Length is 70.
     *
     * @return string
     */
    public function getPersonName() : string
    {
        return $this->personName;
    }
    /**
     * This is a placeholder for contact person's name. Maximum Length is 70.
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
     * This is a placeholder for phone number associated with this contact. Maximum length is 15.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * This is a placeholder for phone number associated with this contact. Maximum length is 15.
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
}