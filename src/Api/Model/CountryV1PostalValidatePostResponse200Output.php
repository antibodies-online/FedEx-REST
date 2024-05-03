<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class CountryV1PostalValidatePostResponse200Output extends \ArrayObject
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
     * The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Initials of the City
     *
     * @var string
     */
    protected $cityFirstInitials;
    /**
     * This is the state or province code. Format and presence of this element will vary, depending on country. <br> Max length is 2. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This object specifies Alert details returned in the reply such as code, message and any other parameters.
     *
     * @var list<CountryV1PostalValidatePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * This object specifies location details returned in the reply such as location ID, service area and airport ID etc.
     *
     * @var list<CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem>
     */
    protected $locationDescriptions;
    /**
     * This is a cleaned postal code returned in the reply.</br>Example: 94267<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $cleanedPostalCode;
    /**
     * The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Initials of the City
     *
     * @return string
     */
    public function getCityFirstInitials() : string
    {
        return $this->cityFirstInitials;
    }
    /**
     * Initials of the City
     *
     * @param string $cityFirstInitials
     *
     * @return self
     */
    public function setCityFirstInitials(string $cityFirstInitials) : self
    {
        $this->initialized['cityFirstInitials'] = true;
        $this->cityFirstInitials = $cityFirstInitials;
        return $this;
    }
    /**
     * This is the state or province code. Format and presence of this element will vary, depending on country. <br> Max length is 2. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is the state or province code. Format and presence of this element will vary, depending on country. <br> Max length is 2. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * This object specifies Alert details returned in the reply such as code, message and any other parameters.
     *
     * @return list<CountryV1PostalValidatePostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * This object specifies Alert details returned in the reply such as code, message and any other parameters.
     *
     * @param list<CountryV1PostalValidatePostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * This object specifies location details returned in the reply such as location ID, service area and airport ID etc.
     *
     * @return list<CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem>
     */
    public function getLocationDescriptions() : array
    {
        return $this->locationDescriptions;
    }
    /**
     * This object specifies location details returned in the reply such as location ID, service area and airport ID etc.
     *
     * @param list<CountryV1PostalValidatePostResponse200OutputLocationDescriptionsItem> $locationDescriptions
     *
     * @return self
     */
    public function setLocationDescriptions(array $locationDescriptions) : self
    {
        $this->initialized['locationDescriptions'] = true;
        $this->locationDescriptions = $locationDescriptions;
        return $this;
    }
    /**
     * This is a cleaned postal code returned in the reply.</br>Example: 94267<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getCleanedPostalCode() : string
    {
        return $this->cleanedPostalCode;
    }
    /**
     * This is a cleaned postal code returned in the reply.</br>Example: 94267<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @param string $cleanedPostalCode
     *
     * @return self
     */
    public function setCleanedPostalCode(string $cleanedPostalCode) : self
    {
        $this->initialized['cleanedPostalCode'] = true;
        $this->cleanedPostalCode = $cleanedPostalCode;
        return $this;
    }
}