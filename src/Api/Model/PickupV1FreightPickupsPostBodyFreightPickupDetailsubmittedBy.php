<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetailsubmittedBy extends \ArrayObject
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
     * Indicates the contact person's company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Indicates the contact person's name.
     *
     * @var string
     */
    protected $personName;
    /**
     * Indicates the contact person's phone number.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Indicates the contact person's phone extension.
     *
     * @var string
     */
    protected $phoneExtension;
    /**
     * contact person's email address.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Indicates the contact person's company name.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Indicates the contact person's company name.
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
     * Indicates the contact person's name.
     *
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }
    /**
     * Indicates the contact person's name.
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
     * Indicates the contact person's phone number.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Indicates the contact person's phone number.
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
     * Indicates the contact person's phone extension.
     *
     * @return string
     */
    public function getPhoneExtension(): string
    {
        return $this->phoneExtension;
    }
    /**
     * Indicates the contact person's phone extension.
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
     * contact person's email address.
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * contact person's email address.
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
}