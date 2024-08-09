<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1ReferencenumbersPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddressAddress extends \ArrayObject
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
     * Specifies the FedEx classification type for an address. <br>Valid values are BUSINESS, RESIDENTIAL, MIXED, UNKNOWN.<br> Example: BUSINESS
     *
     * @var string
     */
    protected $addressClassification;
    /**
     * Placeholder to indicate whether the address is residential (as opposed to commercial).
     *
     * @var bool
     */
    protected $residential;
    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.<br> Example: ["1043 North Easy Street", "Suite 999"]. <br>Note: Street lines is shown in response only in secured flow. For non secured flow, street lines is not shown in the response.
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * Conditional<br>The name of the city, town, etc. <br> Example: SEATTLE
     *
     * @var string
     */
    protected $city;
    /**
     * Relevant only to addresses in Puerto Rico, where multiple addresses within the same postal code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.<br> Example: RAFAEL
     *
     * @var string
     */
    protected $urbanizationCode;
    /**
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Placeholder to specify postal code for the address. Postal Code is required for postal-aware countries.<br> Example: 98101<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Placeholder for country code (2 characters) for the address.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Field holds the fully spelled out name of a country.<br> Example: United States
     *
     * @var string
     */
    protected $countryName;
    /**
     * Specifies the FedEx classification type for an address. <br>Valid values are BUSINESS, RESIDENTIAL, MIXED, UNKNOWN.<br> Example: BUSINESS
     *
     * @return string
     */
    public function getAddressClassification(): string
    {
        return $this->addressClassification;
    }
    /**
     * Specifies the FedEx classification type for an address. <br>Valid values are BUSINESS, RESIDENTIAL, MIXED, UNKNOWN.<br> Example: BUSINESS
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
    /**
     * Placeholder to indicate whether the address is residential (as opposed to commercial).
     *
     * @return bool
     */
    public function getResidential(): bool
    {
        return $this->residential;
    }
    /**
     * Placeholder to indicate whether the address is residential (as opposed to commercial).
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
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.<br> Example: ["1043 North Easy Street", "Suite 999"]. <br>Note: Street lines is shown in response only in secured flow. For non secured flow, street lines is not shown in the response.
     *
     * @return list<string>
     */
    public function getStreetLines(): array
    {
        return $this->streetLines;
    }
    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.<br> Example: ["1043 North Easy Street", "Suite 999"]. <br>Note: Street lines is shown in response only in secured flow. For non secured flow, street lines is not shown in the response.
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
     * Conditional<br>The name of the city, town, etc. <br> Example: SEATTLE
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Conditional<br>The name of the city, town, etc. <br> Example: SEATTLE
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
     * Relevant only to addresses in Puerto Rico, where multiple addresses within the same postal code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.<br> Example: RAFAEL
     *
     * @return string
     */
    public function getUrbanizationCode(): string
    {
        return $this->urbanizationCode;
    }
    /**
     * Relevant only to addresses in Puerto Rico, where multiple addresses within the same postal code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.<br> Example: RAFAEL
     *
     * @param string $urbanizationCode
     *
     * @return self
     */
    public function setUrbanizationCode(string $urbanizationCode): self
    {
        $this->initialized['urbanizationCode'] = true;
        $this->urbanizationCode = $urbanizationCode;
        return $this;
    }
    /**
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
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
    public function setStateOrProvinceCode(string $stateOrProvinceCode): self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Placeholder to specify postal code for the address. Postal Code is required for postal-aware countries.<br> Example: 98101<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Placeholder to specify postal code for the address. Postal Code is required for postal-aware countries.<br> Example: 98101<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
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
     * Placeholder for country code (2 characters) for the address.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Placeholder for country code (2 characters) for the address.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Field holds the fully spelled out name of a country.<br> Example: United States
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }
    /**
     * Field holds the fully spelled out name of a country.<br> Example: United States
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
}