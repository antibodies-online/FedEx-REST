<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetailPhoneNumber extends \ArrayObject
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
     * Indicate the area code for the phone number.
     *
     * @var string
     */
    protected $areaCode;
    /**
     * Indicate the local phone number for contacting in the event of an emergency. Maximum length  is 10.
     *
     * @var string
     */
    protected $localNumber;
    /**
     * Indicate the extension for the phone number.
     *
     * @var string
     */
    protected $extension;
    /**
     * Indicate the Personal Identification Number associated with the phone number.
     *
     * @var string
     */
    protected $personalIdentificationNumber;
    /**
     * Indicate the area code for the phone number.
     *
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
    }
    /**
     * Indicate the area code for the phone number.
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
     * Indicate the local phone number for contacting in the event of an emergency. Maximum length  is 10.
     *
     * @return string
     */
    public function getLocalNumber(): string
    {
        return $this->localNumber;
    }
    /**
     * Indicate the local phone number for contacting in the event of an emergency. Maximum length  is 10.
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
}