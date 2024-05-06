<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsCancelPutBodyAccountAddressOfRecord extends \ArrayObject
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
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * Optional<br> In Puerto Rico, identical street names and address number ranges can be found within the same ZIP Code. In these cases, the urbanization name is the only element that correctly identifies the location of a particular address.<br> Example: URB FAIR OAKS
     *
     * @var string
     */
    protected $urbanizationCode;
    /**
     * Placeholder for the pickup city. Max length is 35. <br> Example: Memphis
     *
     * @var mixed
     */
    protected $city;
    /**
     * The two character state/proviceCode for the pickup. Max length is 2. <br> Example: ON<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var mixed
     */
    protected $stateOrProvinceCode;
    /**
     * This is a placeholder for postal code.<br>Note: The postal code is required for postal-aware countries. <br> Example: 38127<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate whether this address is Residential as opposed to Commercial.
     *
     * @var bool
     */
    protected $residential;
    /**
     * Classifies a given address as either of unknown, residential, mixed or business.
     *
     * @var string
     */
    protected $addressClassification;
    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
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
     * Optional<br> In Puerto Rico, identical street names and address number ranges can be found within the same ZIP Code. In these cases, the urbanization name is the only element that correctly identifies the location of a particular address.<br> Example: URB FAIR OAKS
     *
     * @return string
     */
    public function getUrbanizationCode() : string
    {
        return $this->urbanizationCode;
    }
    /**
     * Optional<br> In Puerto Rico, identical street names and address number ranges can be found within the same ZIP Code. In these cases, the urbanization name is the only element that correctly identifies the location of a particular address.<br> Example: URB FAIR OAKS
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
     * Placeholder for the pickup city. Max length is 35. <br> Example: Memphis
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Placeholder for the pickup city. Max length is 35. <br> Example: Memphis
     *
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * The two character state/proviceCode for the pickup. Max length is 2. <br> Example: ON<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return mixed
     */
    public function getStateOrProvinceCode()
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * The two character state/proviceCode for the pickup. Max length is 2. <br> Example: ON<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @param mixed $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode($stateOrProvinceCode) : self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * This is a placeholder for postal code.<br>Note: The postal code is required for postal-aware countries. <br> Example: 38127<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * This is a placeholder for postal code.<br>Note: The postal code is required for postal-aware countries. <br> Example: 38127<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
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
     * This is the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * This is the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicate whether this address is Residential as opposed to Commercial.
     *
     * @return bool
     */
    public function getResidential() : bool
    {
        return $this->residential;
    }
    /**
     * Indicate whether this address is Residential as opposed to Commercial.
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
     * Classifies a given address as either of unknown, residential, mixed or business.
     *
     * @return string
     */
    public function getAddressClassification() : string
    {
        return $this->addressClassification;
    }
    /**
     * Classifies a given address as either of unknown, residential, mixed or business.
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
}