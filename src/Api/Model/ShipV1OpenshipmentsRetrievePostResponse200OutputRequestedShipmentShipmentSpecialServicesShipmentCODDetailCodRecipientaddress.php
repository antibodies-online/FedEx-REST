<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress extends \ArrayObject
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
     * This is the combination of number, street name, etc. Maximum length per line is 35.<br>Example: 10 FedEx Parkway, Suite 302.<p><i>Note:<ul><li>At least one line is required.</li><li>Streetlines more than 3 will be ignored.</li><li>Empty lines should not be included</li><li>For SmartPost Shipments, only 30 characters from the individual street lines will be printed on the labels.</li></ul></i></p>
     *
     * @var list<string>
     */
    protected $streetLines;
    /**
     * This is a placeholder for City Name. <br><br>Note: This is conditional and not required in all the requests. <br><br>Note: It is recommended for Express shipments for the most accurate ODA and OPA surcharges.<br><br>Example: Beverly Hills
     *
     * @var string
     */
    protected $city;
    /**
     * This is a placeholder for state or province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA.<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is the postal code.<br><br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br><br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * This is the two-letter country code.<br><br>Maximum length is 2.<br><br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
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
     * This is the combination of number, street name, etc. Maximum length per line is 35.<br>Example: 10 FedEx Parkway, Suite 302.<p><i>Note:<ul><li>At least one line is required.</li><li>Streetlines more than 3 will be ignored.</li><li>Empty lines should not be included</li><li>For SmartPost Shipments, only 30 characters from the individual street lines will be printed on the labels.</li></ul></i></p>
     *
     * @return list<string>
     */
    public function getStreetLines(): array
    {
        return $this->streetLines;
    }
    /**
     * This is the combination of number, street name, etc. Maximum length per line is 35.<br>Example: 10 FedEx Parkway, Suite 302.<p><i>Note:<ul><li>At least one line is required.</li><li>Streetlines more than 3 will be ignored.</li><li>Empty lines should not be included</li><li>For SmartPost Shipments, only 30 characters from the individual street lines will be printed on the labels.</li></ul></i></p>
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
     * This is a placeholder for City Name. <br><br>Note: This is conditional and not required in all the requests. <br><br>Note: It is recommended for Express shipments for the most accurate ODA and OPA surcharges.<br><br>Example: Beverly Hills
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * This is a placeholder for City Name. <br><br>Note: This is conditional and not required in all the requests. <br><br>Note: It is recommended for Express shipments for the most accurate ODA and OPA surcharges.<br><br>Example: Beverly Hills
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
     * This is a placeholder for state or province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA.<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is a placeholder for state or province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA.<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
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
     * This is the postal code.<br><br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br><br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * This is the postal code.<br><br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br><br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
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
     * This is the two-letter country code.<br><br>Maximum length is 2.<br><br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * This is the two-letter country code.<br><br>Maximum length is 2.<br><br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
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