<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress extends \ArrayObject
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
     * This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. <br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     *  This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional.Maximum length is 2. <br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Postal code of the address <br> Example: 38017
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Country code of the address.<br>Example: US<br><a onclick='loadDocReference(\"currencycodes\")'>click here to see currencycodes</a>
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
    public function getStreetLines(): array
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
    public function setStreetLines(array $streetLines): self
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
    public function getUrbanizationCode(): string
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
    public function setUrbanizationCode(string $urbanizationCode): self
    {
        $this->initialized['urbanizationCode'] = true;
        $this->urbanizationCode = $urbanizationCode;
        return $this;
    }
    /**
     * This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. <br> Example: Beverly Hills
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. <br> Example: Beverly Hills
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
     *  This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional.Maximum length is 2. <br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     *  This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional.Maximum length is 2. <br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
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
     * Postal code of the address <br> Example: 38017
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code of the address <br> Example: 38017
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
     * Country code of the address.<br>Example: US<br><a onclick='loadDocReference(\"currencycodes\")'>click here to see currencycodes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code of the address.<br>Example: US<br><a onclick='loadDocReference(\"currencycodes\")'>click here to see currencycodes</a>
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
     * Indicate whether this address is Residential as opposed to Commercial.
     *
     * @return bool
     */
    public function getResidential(): bool
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