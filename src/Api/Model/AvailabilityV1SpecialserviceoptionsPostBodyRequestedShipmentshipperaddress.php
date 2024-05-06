<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipperaddress extends \ArrayObject
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
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway"\, \"Suite 302"\]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * This is a placeholder for City Name. <br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is the Postal code. This is Optional for non postal-aware countries. Max length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var mixed
     */
    protected $postalCode;
    /**
     * This is a Two-letter country code.Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var mixed
     */
    protected $countryCode;
    /**
     * Indicate whether this address is Residential as opposed to Commercial.
     *
     * @var bool
     */
    protected $residential;
    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway"\, \"Suite 302"\]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway"\, \"Suite 302"\]
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
     * This is a placeholder for City Name. <br> Example: Beverly Hills
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * This is a placeholder for City Name. <br> Example: Beverly Hills
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
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
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
     * This is the Postal code. This is Optional for non postal-aware countries. Max length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * This is the Postal code. This is Optional for non postal-aware countries. Max length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @param mixed $postalCode
     *
     * @return self
     */
    public function setPostalCode($postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * This is a Two-letter country code.Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * This is a Two-letter country code.Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @param mixed $countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode) : self
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
}