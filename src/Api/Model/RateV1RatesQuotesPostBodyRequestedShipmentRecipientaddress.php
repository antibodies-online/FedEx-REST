<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRecipientaddress extends \ArrayObject
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
     * This is a placeholder for City Name. <br> Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 .<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * 
     *
     * @var string
     */
    protected $postalCode;
    /**
     * 
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
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 .<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 .<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * 
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * 
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