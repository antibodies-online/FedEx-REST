<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsPostBodyAccountAddressOfRecord extends \ArrayObject
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
     * Specify Street line details for the given address <br> Example :[\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * Conditional<br>The name of city, town, etc.<br> Example: Memphis
     *
     * @var string
     */
    protected $city;
    /**
     * This is state or province code. Maximum length is 2.<br> Example: ON <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Specify the postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 38017<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The two-letter code used to identify a country. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicates whether this address is residential (as opposed to commercial).
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
     * Specify Street line details for the given address <br> Example :[\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @return list<string>
     */
    public function getStreetLines(): array
    {
        return $this->streetLines;
    }
    /**
     * Specify Street line details for the given address <br> Example :[\"10 FedEx Parkway\", \"Suite 302\"]
     *
     * @param list<string> $streetLines
     *
     * @return self
     */
    public function setStreetLines(array $streetLines): self
    {
        $this->initialized['streetLines'] = true;
        $this->streetLines = $streetLines;
        return $this;
    }
    /**
     * Conditional<br>The name of city, town, etc.<br> Example: Memphis
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Conditional<br>The name of city, town, etc.<br> Example: Memphis
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * This is state or province code. Maximum length is 2.<br> Example: ON <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is state or province code. Maximum length is 2.<br> Example: ON <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @param string $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Specify the postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 38017<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Specify the postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 38017<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * The two-letter code used to identify a country. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter code used to identify a country. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicates whether this address is residential (as opposed to commercial).
     *
     * @return bool
     */
    public function getResidential(): bool
    {
        return $this->residential;
    }
    /**
     * Indicates whether this address is residential (as opposed to commercial).
     *
     * @param bool $residential
     *
     * @return self
     */
    public function setResidential(bool $residential): self
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
    public function getAddressClassification(): string
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
    public function setAddressClassification(string $addressClassification): self
    {
        $this->initialized['addressClassification'] = true;
        $this->addressClassification = $addressClassification;
        return $this;
    }
}