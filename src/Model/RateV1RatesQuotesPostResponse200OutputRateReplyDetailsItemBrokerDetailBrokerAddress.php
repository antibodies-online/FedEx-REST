<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokerAddress extends \ArrayObject
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
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * This is city name.<br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate whether this address is residential (as opposed to commercial). <br> Valid values are TRUE and FALSE.
     *
     * @var bool
     */
    protected $residential;
    /**
     * Specify the classification of the address. <br> Example: residential
     *
     * @var string
     */
    protected $classification;
    /**
     * Specify the geographic coordinates.<br> Example: geographicCoordinates
     *
     * @var string
     */
    protected $geographicCoordinates;
    /**
     * Specify the urbanization code.
     *
     * @var string
     */
    protected $urbanizationCode;
    /**
     * Specify the country name.<br> Example: India
     *
     * @var string
     */
    protected $countryName;
    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
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
     * This is city name.<br> Example: Beverly Hills
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * This is city name.<br> Example: Beverly Hills
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
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
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
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicate whether this address is residential (as opposed to commercial). <br> Valid values are TRUE and FALSE.
     *
     * @return bool
     */
    public function getResidential() : bool
    {
        return $this->residential;
    }
    /**
     * Indicate whether this address is residential (as opposed to commercial). <br> Valid values are TRUE and FALSE.
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
     * Specify the classification of the address. <br> Example: residential
     *
     * @return string
     */
    public function getClassification() : string
    {
        return $this->classification;
    }
    /**
     * Specify the classification of the address. <br> Example: residential
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification) : self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * Specify the geographic coordinates.<br> Example: geographicCoordinates
     *
     * @return string
     */
    public function getGeographicCoordinates() : string
    {
        return $this->geographicCoordinates;
    }
    /**
     * Specify the geographic coordinates.<br> Example: geographicCoordinates
     *
     * @param string $geographicCoordinates
     *
     * @return self
     */
    public function setGeographicCoordinates(string $geographicCoordinates) : self
    {
        $this->initialized['geographicCoordinates'] = true;
        $this->geographicCoordinates = $geographicCoordinates;
        return $this;
    }
    /**
     * Specify the urbanization code.
     *
     * @return string
     */
    public function getUrbanizationCode() : string
    {
        return $this->urbanizationCode;
    }
    /**
     * Specify the urbanization code.
     *
     * @param string $urbanizationCode
     *
     * @return self
     */
    public function setUrbanizationCode(string $urbanizationCode) : self
    {
        $this->initialized['urbanizationCode'] = true;
        $this->urbanizationCode = $urbanizationCode;
        return $this;
    }
    /**
     * Specify the country name.<br> Example: India
     *
     * @return string
     */
    public function getCountryName() : string
    {
        return $this->countryName;
    }
    /**
     * Specify the country name.<br> Example: India
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName) : self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
}