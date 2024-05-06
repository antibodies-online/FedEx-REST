<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetailLocationContactAndAddressContact extends \ArrayObject
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
     * Specify contact name.Max Length is 70.
     *
     * @var string
     */
    protected $personName;
    /**
     * Specify contact email address. Max length is 80.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specify contact person's phone number. Max length is 15.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify contact person's phone extension. Max length is 6.
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * Specify contact person's fax number. Max length is 15.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Specify contact name.Max Length is 70.
     *
     * @return string
     */
    public function getPersonName() : string
    {
        return $this->personName;
    }
    /**
     * Specify contact name.Max Length is 70.
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
     * Specify contact email address. Max length is 80.
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Specify contact email address. Max length is 80.
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
     * Specify contact person's phone number. Max length is 15.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Specify contact person's phone number. Max length is 15.
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
     * Specify contact person's phone extension. Max length is 6.
     *
     * @return string
     */
    public function getPhoneExtension() : string
    {
        return $this->phoneExtension;
    }
    /**
     * Specify contact person's phone extension. Max length is 6.
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
     * Specify contact person's fax number. Max length is 15.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Specify contact person's fax number. Max length is 15.
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
}