<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemBrokerDetailBrokerAddress extends \ArrayObject
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
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.].
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * This is city name.<br> Example: Beverly Hills.
     *
     * @var string
     */
    protected $city;
    /**
     * This is the state Or Province Code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>.
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>.
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
     * Specifies the classification of the address. <br> Example: residential.
     *
     * @var string
     */
    protected $classification;
    /**
     * Specifies the geographic coordinates.<br> Example: geographicCoordinates.
     *
     * @var string
     */
    protected $geographicCoordinates;
    /**
     * Specifies the urbanization code.
     *
     * @var string
     */
    protected $urbanizationCode;
    /**
     * Specifies the country name.<br> Example: India.
     *
     * @var string
     */
    protected $countryName;

    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.].
     *
     * @return list<string>
     */
    public function getStreetLines(): array
    {
        return $this->streetLines;
    }

    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.].
     *
     * @param list<string> $streetLines
     */
    public function setStreetLines(array $streetLines): self
    {
        $this->initialized['streetLines'] = true;
        $this->streetLines = $streetLines;

        return $this;
    }

    /**
     * This is city name.<br> Example: Beverly Hills.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * This is city name.<br> Example: Beverly Hills.
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * This is the state Or Province Code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>.
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }

    /**
     * This is the state Or Province Code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>.
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;

        return $this;
    }

    /**
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>.
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Indicate whether this address is residential (as opposed to commercial).
     */
    public function getResidential(): bool
    {
        return $this->residential;
    }

    /**
     * Indicate whether this address is residential (as opposed to commercial).
     */
    public function setResidential(bool $residential): self
    {
        $this->initialized['residential'] = true;
        $this->residential = $residential;

        return $this;
    }

    /**
     * Specifies the classification of the address. <br> Example: residential.
     */
    public function getClassification(): string
    {
        return $this->classification;
    }

    /**
     * Specifies the classification of the address. <br> Example: residential.
     */
    public function setClassification(string $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;

        return $this;
    }

    /**
     * Specifies the geographic coordinates.<br> Example: geographicCoordinates.
     */
    public function getGeographicCoordinates(): string
    {
        return $this->geographicCoordinates;
    }

    /**
     * Specifies the geographic coordinates.<br> Example: geographicCoordinates.
     */
    public function setGeographicCoordinates(string $geographicCoordinates): self
    {
        $this->initialized['geographicCoordinates'] = true;
        $this->geographicCoordinates = $geographicCoordinates;

        return $this;
    }

    /**
     * Specifies the urbanization code.
     */
    public function getUrbanizationCode(): string
    {
        return $this->urbanizationCode;
    }

    /**
     * Specifies the urbanization code.
     */
    public function setUrbanizationCode(string $urbanizationCode): self
    {
        $this->initialized['urbanizationCode'] = true;
        $this->urbanizationCode = $urbanizationCode;

        return $this;
    }

    /**
     * Specifies the country name.<br> Example: India.
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * Specifies the country name.<br> Example: India.
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;

        return $this;
    }
}