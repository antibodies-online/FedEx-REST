<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemEmergencyContactNumber extends \ArrayObject
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
     * Indicates the area code.
     *
     * @var string
     */
    protected $areaCode;
    /**
     * Indicates the Extension.
     *
     * @var string
     */
    protected $extension;
    /**
     * The two-letter code used to identify a country.<br>Example: US
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicates the Personal Identification Number.
     *
     * @var string
     */
    protected $personalIdentificationNumber;
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @var string
     */
    protected $localNumber;
    /**
     * Indicates the area code.
     *
     * @return string
     */
    public function getAreaCode() : string
    {
        return $this->areaCode;
    }
    /**
     * Indicates the area code.
     *
     * @param string $areaCode
     *
     * @return self
     */
    public function setAreaCode(string $areaCode) : self
    {
        $this->initialized['areaCode'] = true;
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * Indicates the Extension.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * Indicates the Extension.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
    /**
     * The two-letter code used to identify a country.<br>Example: US
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter code used to identify a country.<br>Example: US
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Indicates the Personal Identification Number.
     *
     * @return string
     */
    public function getPersonalIdentificationNumber() : string
    {
        return $this->personalIdentificationNumber;
    }
    /**
     * Indicates the Personal Identification Number.
     *
     * @param string $personalIdentificationNumber
     *
     * @return self
     */
    public function setPersonalIdentificationNumber(string $personalIdentificationNumber) : self
    {
        $this->initialized['personalIdentificationNumber'] = true;
        $this->personalIdentificationNumber = $personalIdentificationNumber;
        return $this;
    }
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @return string
     */
    public function getLocalNumber() : string
    {
        return $this->localNumber;
    }
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $localNumber
     *
     * @return self
     */
    public function setLocalNumber(string $localNumber) : self
    {
        $this->initialized['localNumber'] = true;
        $this->localNumber = $localNumber;
        return $this;
    }
}