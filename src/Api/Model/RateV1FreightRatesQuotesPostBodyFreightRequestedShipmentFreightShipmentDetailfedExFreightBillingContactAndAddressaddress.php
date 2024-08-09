<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentDetailfedExFreightBillingContactAndAddressaddress extends \ArrayObject
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
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * Specifies city name.
     *
     * @var string
     */
    protected $city;
    /**
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     * @return list<string>
     */
    public function getStreetLines(): array
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
    public function setStreetLines(array $streetLines): self
    {
        $this->initialized['streetLines'] = true;
        $this->streetLines = $streetLines;
        return $this;
    }
    /**
     * Specifies city name.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Specifies city name.
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
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2<br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode(): string
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
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
}