<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class CountryV1PostalValidatePostBody extends \ArrayObject
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
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * This is the state or province code. Format and presence of this field will vary, depending on country. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * Identification code of a region (usally small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.  <br> Example: 75063-8659 <br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Specify the date on which the package is to be shipped. The specified date should not be the current date or any date, 10 days after the current date. The date format must be YYYY-MM-DD. <br> Example: 2019-10-04
     *
     * @var string
     */
    protected $shipDate;
    /**
     * Specify the routing code for the shipment. Routing code is the information that identifies the route the package or shipment may take. <br> Example: Memphis 38017 - HKA/NQA
     *
     * @var string
     */
    protected $routingCode;
    /**
     * This element checks for mismatch between State/Province Code and Postal Code. <ul><li>When the checkForMismatch is set TRUE, for U.S. and Canada: The values in State/Province Code are checked with respect to Postal Code provided. If these entries are valid, the response provides respective State/Province Code and Postal Code. In case of mismatch of Postal Code and State/Province Code an error message is displayed.</li><li> When the checkForMismatch is set FALSE, for U.S. and Canada: The values in State/Province Code are not checked with respect to Postal Code provided. Instead the given data is reflected in the response.</li></ul> <br> For regions other than U.S and Canada regardless of the value of checkForMismatch the State/Province Code are checked with respect to the Postal Code and the response provides the respective State/Province Code and Postal Code.
     *
     * @var bool
     */
    protected $checkForMismatch;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
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
     * This is the state or province code. Format and presence of this field will vary, depending on country. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is the state or province code. Format and presence of this field will vary, depending on country. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * Identification code of a region (usally small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.  <br> Example: 75063-8659 <br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Identification code of a region (usally small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.  <br> Example: 75063-8659 <br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
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
     * Specify the date on which the package is to be shipped. The specified date should not be the current date or any date, 10 days after the current date. The date format must be YYYY-MM-DD. <br> Example: 2019-10-04
     *
     * @return string
     */
    public function getShipDate() : string
    {
        return $this->shipDate;
    }
    /**
     * Specify the date on which the package is to be shipped. The specified date should not be the current date or any date, 10 days after the current date. The date format must be YYYY-MM-DD. <br> Example: 2019-10-04
     *
     * @param string $shipDate
     *
     * @return self
     */
    public function setShipDate(string $shipDate) : self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
     * Specify the routing code for the shipment. Routing code is the information that identifies the route the package or shipment may take. <br> Example: Memphis 38017 - HKA/NQA
     *
     * @return string
     */
    public function getRoutingCode() : string
    {
        return $this->routingCode;
    }
    /**
     * Specify the routing code for the shipment. Routing code is the information that identifies the route the package or shipment may take. <br> Example: Memphis 38017 - HKA/NQA
     *
     * @param string $routingCode
     *
     * @return self
     */
    public function setRoutingCode(string $routingCode) : self
    {
        $this->initialized['routingCode'] = true;
        $this->routingCode = $routingCode;
        return $this;
    }
    /**
     * This element checks for mismatch between State/Province Code and Postal Code. <ul><li>When the checkForMismatch is set TRUE, for U.S. and Canada: The values in State/Province Code are checked with respect to Postal Code provided. If these entries are valid, the response provides respective State/Province Code and Postal Code. In case of mismatch of Postal Code and State/Province Code an error message is displayed.</li><li> When the checkForMismatch is set FALSE, for U.S. and Canada: The values in State/Province Code are not checked with respect to Postal Code provided. Instead the given data is reflected in the response.</li></ul> <br> For regions other than U.S and Canada regardless of the value of checkForMismatch the State/Province Code are checked with respect to the Postal Code and the response provides the respective State/Province Code and Postal Code.
     *
     * @return bool
     */
    public function getCheckForMismatch() : bool
    {
        return $this->checkForMismatch;
    }
    /**
     * This element checks for mismatch between State/Province Code and Postal Code. <ul><li>When the checkForMismatch is set TRUE, for U.S. and Canada: The values in State/Province Code are checked with respect to Postal Code provided. If these entries are valid, the response provides respective State/Province Code and Postal Code. In case of mismatch of Postal Code and State/Province Code an error message is displayed.</li><li> When the checkForMismatch is set FALSE, for U.S. and Canada: The values in State/Province Code are not checked with respect to Postal Code provided. Instead the given data is reflected in the response.</li></ul> <br> For regions other than U.S and Canada regardless of the value of checkForMismatch the State/Province Code are checked with respect to the Postal Code and the response provides the respective State/Province Code and Postal Code.
     *
     * @param bool $checkForMismatch
     *
     * @return self
     */
    public function setCheckForMismatch(bool $checkForMismatch) : self
    {
        $this->initialized['checkForMismatch'] = true;
        $this->checkForMismatch = $checkForMismatch;
        return $this;
    }
}