<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetailfedExFreightBillingContactAndAddresscontactAncillaryDetailPhoneNumberDetailsItemNumber extends \ArrayObject
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
     * Indicate the Area Code for the phone number.
     *
     * @var string
     */
    protected $areaCode;
    /**
     * Indicate the extension for the phone number.
     *
     * @var string
     */
    protected $extension;
    /**
     * The two-letter code used to identify a country.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate the Personal Identification Number associated with the phone number.
     *
     * @var string
     */
    protected $personalIdentificationNumber;
    /**
     * Indicate the local phone number for contacting in the event of an emergency.
     *
     * @var string
     */
    protected $localNumber;
    /**
     * Indicate the Area Code for the phone number.
     *
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
    }
    /**
     * Indicate the Area Code for the phone number.
     *
     * @param string $areaCode
     *
     * @return self
     */
    public function setAreaCode(string $areaCode): self
    {
        $this->initialized['areaCode'] = true;
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * Indicate the extension for the phone number.
     *
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }
    /**
     * Indicate the extension for the phone number.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(string $extension): self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
    /**
     * The two-letter code used to identify a country.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter code used to identify a country.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Indicate the Personal Identification Number associated with the phone number.
     *
     * @return string
     */
    public function getPersonalIdentificationNumber(): string
    {
        return $this->personalIdentificationNumber;
    }
    /**
     * Indicate the Personal Identification Number associated with the phone number.
     *
     * @param string $personalIdentificationNumber
     *
     * @return self
     */
    public function setPersonalIdentificationNumber(string $personalIdentificationNumber): self
    {
        $this->initialized['personalIdentificationNumber'] = true;
        $this->personalIdentificationNumber = $personalIdentificationNumber;
        return $this;
    }
    /**
     * Indicate the local phone number for contacting in the event of an emergency.
     *
     * @return string
     */
    public function getLocalNumber(): string
    {
        return $this->localNumber;
    }
    /**
     * Indicate the local phone number for contacting in the event of an emergency.
     *
     * @param string $localNumber
     *
     * @return self
     */
    public function setLocalNumber(string $localNumber): self
    {
        $this->initialized['localNumber'] = true;
        $this->localNumber = $localNumber;
        return $this;
    }
}