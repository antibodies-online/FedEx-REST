<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostBodyAddressesToValidateItemAddress extends \ArrayObject
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
     * Indicate the combination of number, street name. etc. <br>Example: ["7372 PARKRIDGE BLVD", "APT 286, 2903 sprank"].<br><br>Note:<ul><li>At least one line is required for a valid physical address; empty lines should not be included.</li><li>Maximum up to three lines & no error check if entered more than this limit.</li><li>Recommended limit per line is 35 characters.</li></ul>
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * Indicate the name of city, town, etc.<br><br>Note: City is mandatory, When postalcode is not provided and includeResolutionTokens value is true in the request.
     *
     * @var string
     */
    protected $city;
    /**
     * Indicate the State or Province codes. The Format and presence of this field may vary depending on the country.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'> Click here to see State Or Province Code</a>. Maximum length is 2
     *
     * @var mixed
     */
    protected $stateOrProvinceCode;
    /**
     * Indicate the Postal Code which is an identification code of a region (usually small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.<br> Example: 75063-8659<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal Code</a>
     *
     * @var mixed
     */
    protected $postalCode;
    /**
     * Specify the ISO Alpha2 code of the country.<br>Example: US <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicate the combination of number, street name. etc. <br>Example: ["7372 PARKRIDGE BLVD", "APT 286, 2903 sprank"].<br><br>Note:<ul><li>At least one line is required for a valid physical address; empty lines should not be included.</li><li>Maximum up to three lines & no error check if entered more than this limit.</li><li>Recommended limit per line is 35 characters.</li></ul>
     *
     * @return list<string>
     */
    public function getStreetLines() : array
    {
        return $this->streetLines;
    }
    /**
     * Indicate the combination of number, street name. etc. <br>Example: ["7372 PARKRIDGE BLVD", "APT 286, 2903 sprank"].<br><br>Note:<ul><li>At least one line is required for a valid physical address; empty lines should not be included.</li><li>Maximum up to three lines & no error check if entered more than this limit.</li><li>Recommended limit per line is 35 characters.</li></ul>
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
     * Indicate the name of city, town, etc.<br><br>Note: City is mandatory, When postalcode is not provided and includeResolutionTokens value is true in the request.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Indicate the name of city, town, etc.<br><br>Note: City is mandatory, When postalcode is not provided and includeResolutionTokens value is true in the request.
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
     * Indicate the State or Province codes. The Format and presence of this field may vary depending on the country.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'> Click here to see State Or Province Code</a>. Maximum length is 2
     *
     * @return mixed
     */
    public function getStateOrProvinceCode()
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * Indicate the State or Province codes. The Format and presence of this field may vary depending on the country.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'> Click here to see State Or Province Code</a>. Maximum length is 2
     *
     * @param mixed $stateOrProvinceCode
     *
     * @return self
     */
    public function setStateOrProvinceCode($stateOrProvinceCode) : self
    {
        $this->initialized['stateOrProvinceCode'] = true;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Indicate the Postal Code which is an identification code of a region (usually small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.<br> Example: 75063-8659<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal Code</a>
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Indicate the Postal Code which is an identification code of a region (usually small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.<br> Example: 75063-8659<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal Code</a>
     *
     * @param mixed $postalCode
     *
     * @return self
     */
    public function setPostalCode($postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Specify the ISO Alpha2 code of the country.<br>Example: US <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Specify the ISO Alpha2 code of the country.<br>Example: US <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
}