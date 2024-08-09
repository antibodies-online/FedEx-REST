<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact extends \ArrayObject
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
     * Identifies the company this contact is associated with. Maximum length is 35.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Identifies the contact person's name. Maximum length is 70.
     *
     * @var string
     */
    protected $personName;
    /**
     * Identifies the phone number associated with this contact. Maximum length is 10.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Identifies the company this contact is associated with. Maximum length is 35.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Identifies the company this contact is associated with. Maximum length is 35.
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
     * Identifies the contact person's name. Maximum length is 70.
     *
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }
    /**
     * Identifies the contact person's name. Maximum length is 70.
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
     * Identifies the phone number associated with this contact. Maximum length is 10.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Identifies the phone number associated with this contact. Maximum length is 10.
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
}