<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputmatchedAddress extends \ArrayObject
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
     * This is a combination of number, street name, etc. <br><i>Note: Streetlines more than 3 will be ignored. Empty lines should not be included.</i><br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * This is a placeholder for City Name. <br> City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER<br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is a placeholder for State or Province code. <br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is placeholder for postal code.<br><i>Note: <ul><li>Postal code is required for postal-aware countries.</li>City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER</li></ul></i>Example: 38127<br><br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the Two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate whether this address is Residential as opposed to Commercial.<br>Valid Values: True or False.
     *
     * @var bool
     */
    protected $residential;
    /**
     * This is the address verification identifier. <br> Example: MARKET_LAUNCH
     *
     * @var string
     */
    protected $addressVerificationId;
    /**
     * The business residential indicators.
     *
     * @var string
     */
    protected $addressClassification;
    /**
     * The confidence of business residential classification business residential indicators.
     *
     * @var string
     */
    protected $addressClassificationConfidence;
    /**
     * This is a combination of number, street name, etc. <br><i>Note: Streetlines more than 3 will be ignored. Empty lines should not be included.</i><br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * This is a combination of number, street name, etc. <br><i>Note: Streetlines more than 3 will be ignored. Empty lines should not be included.</i><br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @param list<string> $streetLines
     *
     * @return self
     */
    public function setStreetLines(array $streetLines) : self
    {
        $this->initialized['streetLines'] = true;
        $this->streetLines = $streetLines;
        return $this;
    }
    /**
     * This is a placeholder for City Name. <br> City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER<br> Example: Beverly Hills
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * This is a placeholder for City Name. <br> City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER<br> Example: Beverly Hills
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * This is a placeholder for State or Province code. <br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for State or Province code. <br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @param string $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode) : self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * This is placeholder for postal code.<br><i>Note: <ul><li>Postal code is required for postal-aware countries.</li>City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER</li></ul></i>Example: 38127<br><br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * This is placeholder for postal code.<br><i>Note: <ul><li>Postal code is required for postal-aware countries.</li>City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER</li></ul></i>Example: 38127<br><br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * This is the Two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * This is the Two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicate whether this address is Residential as opposed to Commercial.<br>Valid Values: True or False.
     *
     * @return bool
     */
    public function getResidential() : bool
    {
        return $this->residential;
    }
    /**
     * Indicate whether this address is Residential as opposed to Commercial.<br>Valid Values: True or False.
     *
     * @param bool $residential
     *
     * @return self
     */
    public function setResidential(bool $residential) : self
    {
        $this->initialized['residential'] = true;
        $this->residential = $residential;
        return $this;
    }
    /**
     * This is the address verification identifier. <br> Example: MARKET_LAUNCH
     *
     * @return string
     */
    public function getAddressVerificationId() : string
    {
        return $this->addressVerificationId;
    }
    /**
     * This is the address verification identifier. <br> Example: MARKET_LAUNCH
     *
     * @param string $addressVerificationId
     *
     * @return self
     */
    public function setAddressVerificationId(string $addressVerificationId) : self
    {
        $this->initialized['addressVerificationId'] = true;
        $this->addressVerificationId = $addressVerificationId;
        return $this;
    }
    /**
     * The business residential indicators.
     *
     * @return string
     */
    public function getAddressClassification() : string
    {
        return $this->addressClassification;
    }
    /**
     * The business residential indicators.
     *
     * @param string $addressClassification
     *
     * @return self
     */
    public function setAddressClassification(string $addressClassification) : self
    {
        $this->initialized['addressClassification'] = true;
        $this->addressClassification = $addressClassification;
        return $this;
    }
    /**
     * The confidence of business residential classification business residential indicators.
     *
     * @return string
     */
    public function getAddressClassificationConfidence() : string
    {
        return $this->addressClassificationConfidence;
    }
    /**
     * The confidence of business residential classification business residential indicators.
     *
     * @param string $addressClassificationConfidence
     *
     * @return self
     */
    public function setAddressClassificationConfidence(string $addressClassificationConfidence) : self
    {
        $this->initialized['addressClassificationConfidence'] = true;
        $this->addressClassificationConfidence = $addressClassificationConfidence;
        return $this;
    }
}