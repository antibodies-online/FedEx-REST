<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayorResponsiblePartyaddress extends \ArrayObject
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
     * This is a placeholder for City Name. <br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Indicate the Postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the two-letter country code. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * This is a placeholder for City Name. <br> Example: Beverly Hills
     *
     * @return string
     */
    public function getCity(): string
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
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * Indicate the Postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Indicate the Postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
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
     * This is the two-letter country code. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * This is the two-letter country code. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicate whether this address is residential (as opposed to commercial).
     *
     * @return bool
     */
    public function getResidential(): bool
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
    public function setResidential(bool $residential): self
    {
        $this->initialized['residential'] = true;
        $this->residential = $residential;
        return $this;
    }
}