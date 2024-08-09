<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItemAddress extends \ArrayObject
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
     * The name of city, town, etc. <br>Example: Collierville
     *
     * @var string
     */
    protected $city;
    /**
     * Identifying abbreviation for US state, canada Province. Format and presence of this field will vary, depending on the country. State code is required for US, CA, PR and not required for other countries. Conditional. Not used for Ground/SmartPost. Max length is 2.<br> Example: TN
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Identification of a region for mail/package delivery. Format and presence of this field will vary, depending on the country.Optional for non postal-aware countries. Max length is 10.<br> Example: 38127
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The two-letter code used to identify a country. Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicates whether the address is residential (as opposed to commercial).<br> Example: false
     *
     * @var bool
     */
    protected $residential;
    /**
     * The name of city, town, etc. <br>Example: Collierville
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * The name of city, town, etc. <br>Example: Collierville
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
     * Identifying abbreviation for US state, canada Province. Format and presence of this field will vary, depending on the country. State code is required for US, CA, PR and not required for other countries. Conditional. Not used for Ground/SmartPost. Max length is 2.<br> Example: TN
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * Identifying abbreviation for US state, canada Province. Format and presence of this field will vary, depending on the country. State code is required for US, CA, PR and not required for other countries. Conditional. Not used for Ground/SmartPost. Max length is 2.<br> Example: TN
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
     * Identification of a region for mail/package delivery. Format and presence of this field will vary, depending on the country.Optional for non postal-aware countries. Max length is 10.<br> Example: 38127
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Identification of a region for mail/package delivery. Format and presence of this field will vary, depending on the country.Optional for non postal-aware countries. Max length is 10.<br> Example: 38127
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
     * The two-letter code used to identify a country. Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter code used to identify a country. Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicates whether the address is residential (as opposed to commercial).<br> Example: false
     *
     * @return bool
     */
    public function getResidential(): bool
    {
        return $this->residential;
    }
    /**
     * Indicates whether the address is residential (as opposed to commercial).<br> Example: false
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
}