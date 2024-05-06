<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress extends \ArrayObject
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
     * Combination of number, street name, etc. At least one line is required for a valid physical address. Empty lines should not be included. Max Length is 35.<br>Example: [1550 Union Blvd,Suite 302]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * The name of city, town of the recipient.Max length is 35.<br>Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * The US States,Canada and Puerto Rico Province codes of the recipient. The Format and presence of this field may vary depending on the country.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is the postal code.<br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the two-letter country code.<br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate whether this address is residential (as opposed to commercial).
     *
     * @var bool
     */
    protected $residential;
    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address. Empty lines should not be included. Max Length is 35.<br>Example: [1550 Union Blvd,Suite 302]
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address. Empty lines should not be included. Max Length is 35.<br>Example: [1550 Union Blvd,Suite 302]
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
     * The name of city, town of the recipient.Max length is 35.<br>Example: Beverly Hills
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The name of city, town of the recipient.Max length is 35.<br>Example: Beverly Hills
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
     * The US States,Canada and Puerto Rico Province codes of the recipient. The Format and presence of this field may vary depending on the country.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * The US States,Canada and Puerto Rico Province codes of the recipient. The Format and presence of this field may vary depending on the country.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA
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
     * This is the postal code.<br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * This is the postal code.<br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
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
     * This is the two-letter country code.<br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * This is the two-letter country code.<br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
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
     * Indicate whether this address is residential (as opposed to commercial).
     *
     * @return bool
     */
    public function getResidential() : bool
    {
        return $this->residential;
    }
    /**
     * Indicate whether this address is residential (as opposed to commercial).
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