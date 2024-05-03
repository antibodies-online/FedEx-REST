<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItem extends \ArrayObject
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
     * Indicates the resolved street address lines.<br>Example: [\"7372 PARKRIDGE BLVD\", \"APT 286, 2903 sprank\"]
     *
     * @var list<string>
     */
    protected $streetLinesToken;
    /**
     * This is resolved city name.<br> Example: IRVING
     *
     * @var string
     */
    protected $city;
    /**
     * This is resolved state or province code.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @var string
     */
    protected $stateOrProvinceCode;
    /**
     * This is resolved ISO alpha 2 country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Returns messages pertaining to the resolved address indicating if any additional information is required.<br><br>Following are informational code and messages with respect to the results:<ul><li><i>INVALID.SUITE.NUMBER</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>SUITE.NUMBER.REQUIRED</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>PARTIAL.STREET.MATCH</i> &ndash; A street address is required for delivery. The entered address is a street number range.</li><li><i>MISSING.OR.AMBIGUOUS.DIRECTIONAL</i> &ndash; Invalid or missing address directional.</li><li><i>INTERPOLATED.STREET.ADDRESS</i> &ndash; Unable to confirm exact street number for the entered street name. The address falls within a valid range for the street name.</li><li><i>RRHC.CONVERSION</i> &ndash; A street address is required for delivery. The address has been converted from a rural route.</li></ul>
     *
     * @var list<mixed>
     */
    protected $customerMessage;
    /**
     * This is the resolved city name with a token. The token is an indication to the changes made.<br> Examples: [TOK-1X3256]
     *
     * @var list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemCityTokenItem>
     */
    protected $cityToken;
    /**
     * This is the resolved postal code with a token. The token is an indication to the changes made.
     *
     * @var AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken
     */
    protected $postalCodeToken;
    /**
     * The postal code specified in a form that is supported by USPS as base, secondary and tertiary.<ul><li>Base</li><li>AddOn</li><li>DeliveryPoint</li></ul>Example: 75063-8659
     *
     * @var AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode
     */
    protected $parsedPostalCode;
    /**
     * This is the classification type of a FedEx address.<br>Valid values:<ul><li>BUSINESS</li><li>RESIDENTIAL</li><li>MIXED (If it is a multi-tenant based address and contains both business and residential units.)</li><li>UNKNOWN (If just a zip code is provided, Address Validation Service returns 'unknown' for the business/residential classification.)</li>
     *
     * @var string
     */
    protected $classification;
    /**
     * Indicates if the resolved address is a P.O. Box.
     *
     * @var bool
     */
    protected $postOfficeBox;
    /**
     * Indicates the presence of a delivery point such as a mailbox. Provided only for US addresses that are standardized against Postal Data.
     *
     * @var bool
     */
    protected $normalizedStatusNameDPV;
    /**
     * Indicates the source from which the standardized address is matched. <br> Example: Postal or Map.
     *
     * @var string
     */
    protected $standardizedStatusNameMatchSource;
    /**
     * Indicates the resolution method used to resolve the address. <br>Valid values: <ul><li>USPS_VALIDATE</li><li>CA_VALIDATE</li><li>GENERIC_VALIDATE</li><li>NAVTEQ_GEO_VALIDATE</li><li>TELEATLAS_GEO_VALIDATE</li></ul>
     *
     * @var string
     */
    protected $resolutionMethodName;
    /**
     * Indicates if the resolved address is a Rural Route or Highway Contract (US only). It returns true if it is rural route. 
     *
     * @var bool
     */
    protected $ruralRouteHighwayContract;
    /**
     * Indicates the mail service is for those without permanent address. The mails for this address are held at a post office. Only applies to addresses that can be standardized against Postal Data. Not provided for US Geo Validated addresses. <br>Note: Only returned when the address cannot be resolved.
     *
     * @var bool
     */
    protected $generalDelivery;
    /**
     * These are the  key-value pair as additional information returned along with the address processed by the system. These attribute will list what is working and what is not on the input address. For More information, look in to Chapter Address Attributes in the Overview.<br><a onclick='loadDocReference("addressattributes")'>Click here to see Address Attributes</a>
     *
     * @var AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes
     */
    protected $attributes;
    /**
     * Indicates the resolved street address lines.<br>Example: [\"7372 PARKRIDGE BLVD\", \"APT 286, 2903 sprank\"]
     *
     * @return list<string>
     */
    public function getStreetLinesToken() : array
    {
        return $this->streetLinesToken;
    }
    /**
     * Indicates the resolved street address lines.<br>Example: [\"7372 PARKRIDGE BLVD\", \"APT 286, 2903 sprank\"]
     *
     * @param list<string> $streetLinesToken
     *
     * @return self
     */
    public function setStreetLinesToken(array $streetLinesToken) : self
    {
        $this->initialized['streetLinesToken'] = true;
        $this->streetLinesToken = $streetLinesToken;
        return $this;
    }
    /**
     * This is resolved city name.<br> Example: IRVING
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * This is resolved city name.<br> Example: IRVING
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
     * This is resolved state or province code.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * @return string
     */
    public function getStateOrProvinceCode() : string
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * This is resolved state or province code.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
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
     * This is resolved ISO alpha 2 country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * This is resolved ISO alpha 2 country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Returns messages pertaining to the resolved address indicating if any additional information is required.<br><br>Following are informational code and messages with respect to the results:<ul><li><i>INVALID.SUITE.NUMBER</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>SUITE.NUMBER.REQUIRED</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>PARTIAL.STREET.MATCH</i> &ndash; A street address is required for delivery. The entered address is a street number range.</li><li><i>MISSING.OR.AMBIGUOUS.DIRECTIONAL</i> &ndash; Invalid or missing address directional.</li><li><i>INTERPOLATED.STREET.ADDRESS</i> &ndash; Unable to confirm exact street number for the entered street name. The address falls within a valid range for the street name.</li><li><i>RRHC.CONVERSION</i> &ndash; A street address is required for delivery. The address has been converted from a rural route.</li></ul>
     *
     * @return list<mixed>
     */
    public function getCustomerMessage() : array
    {
        return $this->customerMessage;
    }
    /**
     * Returns messages pertaining to the resolved address indicating if any additional information is required.<br><br>Following are informational code and messages with respect to the results:<ul><li><i>INVALID.SUITE.NUMBER</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>SUITE.NUMBER.REQUIRED</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>PARTIAL.STREET.MATCH</i> &ndash; A street address is required for delivery. The entered address is a street number range.</li><li><i>MISSING.OR.AMBIGUOUS.DIRECTIONAL</i> &ndash; Invalid or missing address directional.</li><li><i>INTERPOLATED.STREET.ADDRESS</i> &ndash; Unable to confirm exact street number for the entered street name. The address falls within a valid range for the street name.</li><li><i>RRHC.CONVERSION</i> &ndash; A street address is required for delivery. The address has been converted from a rural route.</li></ul>
     *
     * @param list<mixed> $customerMessage
     *
     * @return self
     */
    public function setCustomerMessage(array $customerMessage) : self
    {
        $this->initialized['customerMessage'] = true;
        $this->customerMessage = $customerMessage;
        return $this;
    }
    /**
     * This is the resolved city name with a token. The token is an indication to the changes made.<br> Examples: [TOK-1X3256]
     *
     * @return list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemCityTokenItem>
     */
    public function getCityToken() : array
    {
        return $this->cityToken;
    }
    /**
     * This is the resolved city name with a token. The token is an indication to the changes made.<br> Examples: [TOK-1X3256]
     *
     * @param list<AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemCityTokenItem> $cityToken
     *
     * @return self
     */
    public function setCityToken(array $cityToken) : self
    {
        $this->initialized['cityToken'] = true;
        $this->cityToken = $cityToken;
        return $this;
    }
    /**
     * This is the resolved postal code with a token. The token is an indication to the changes made.
     *
     * @return AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken
     */
    public function getPostalCodeToken() : AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken
    {
        return $this->postalCodeToken;
    }
    /**
     * This is the resolved postal code with a token. The token is an indication to the changes made.
     *
     * @param AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken $postalCodeToken
     *
     * @return self
     */
    public function setPostalCodeToken(AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken $postalCodeToken) : self
    {
        $this->initialized['postalCodeToken'] = true;
        $this->postalCodeToken = $postalCodeToken;
        return $this;
    }
    /**
     * The postal code specified in a form that is supported by USPS as base, secondary and tertiary.<ul><li>Base</li><li>AddOn</li><li>DeliveryPoint</li></ul>Example: 75063-8659
     *
     * @return AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode
     */
    public function getParsedPostalCode() : AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode
    {
        return $this->parsedPostalCode;
    }
    /**
     * The postal code specified in a form that is supported by USPS as base, secondary and tertiary.<ul><li>Base</li><li>AddOn</li><li>DeliveryPoint</li></ul>Example: 75063-8659
     *
     * @param AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode $parsedPostalCode
     *
     * @return self
     */
    public function setParsedPostalCode(AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemParsedPostalCode $parsedPostalCode) : self
    {
        $this->initialized['parsedPostalCode'] = true;
        $this->parsedPostalCode = $parsedPostalCode;
        return $this;
    }
    /**
     * This is the classification type of a FedEx address.<br>Valid values:<ul><li>BUSINESS</li><li>RESIDENTIAL</li><li>MIXED (If it is a multi-tenant based address and contains both business and residential units.)</li><li>UNKNOWN (If just a zip code is provided, Address Validation Service returns 'unknown' for the business/residential classification.)</li>
     *
     * @return string
     */
    public function getClassification() : string
    {
        return $this->classification;
    }
    /**
     * This is the classification type of a FedEx address.<br>Valid values:<ul><li>BUSINESS</li><li>RESIDENTIAL</li><li>MIXED (If it is a multi-tenant based address and contains both business and residential units.)</li><li>UNKNOWN (If just a zip code is provided, Address Validation Service returns 'unknown' for the business/residential classification.)</li>
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification) : self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * Indicates if the resolved address is a P.O. Box.
     *
     * @return bool
     */
    public function getPostOfficeBox() : bool
    {
        return $this->postOfficeBox;
    }
    /**
     * Indicates if the resolved address is a P.O. Box.
     *
     * @param bool $postOfficeBox
     *
     * @return self
     */
    public function setPostOfficeBox(bool $postOfficeBox) : self
    {
        $this->initialized['postOfficeBox'] = true;
        $this->postOfficeBox = $postOfficeBox;
        return $this;
    }
    /**
     * Indicates the presence of a delivery point such as a mailbox. Provided only for US addresses that are standardized against Postal Data.
     *
     * @return bool
     */
    public function getNormalizedStatusNameDPV() : bool
    {
        return $this->normalizedStatusNameDPV;
    }
    /**
     * Indicates the presence of a delivery point such as a mailbox. Provided only for US addresses that are standardized against Postal Data.
     *
     * @param bool $normalizedStatusNameDPV
     *
     * @return self
     */
    public function setNormalizedStatusNameDPV(bool $normalizedStatusNameDPV) : self
    {
        $this->initialized['normalizedStatusNameDPV'] = true;
        $this->normalizedStatusNameDPV = $normalizedStatusNameDPV;
        return $this;
    }
    /**
     * Indicates the source from which the standardized address is matched. <br> Example: Postal or Map.
     *
     * @return string
     */
    public function getStandardizedStatusNameMatchSource() : string
    {
        return $this->standardizedStatusNameMatchSource;
    }
    /**
     * Indicates the source from which the standardized address is matched. <br> Example: Postal or Map.
     *
     * @param string $standardizedStatusNameMatchSource
     *
     * @return self
     */
    public function setStandardizedStatusNameMatchSource(string $standardizedStatusNameMatchSource) : self
    {
        $this->initialized['standardizedStatusNameMatchSource'] = true;
        $this->standardizedStatusNameMatchSource = $standardizedStatusNameMatchSource;
        return $this;
    }
    /**
     * Indicates the resolution method used to resolve the address. <br>Valid values: <ul><li>USPS_VALIDATE</li><li>CA_VALIDATE</li><li>GENERIC_VALIDATE</li><li>NAVTEQ_GEO_VALIDATE</li><li>TELEATLAS_GEO_VALIDATE</li></ul>
     *
     * @return string
     */
    public function getResolutionMethodName() : string
    {
        return $this->resolutionMethodName;
    }
    /**
     * Indicates the resolution method used to resolve the address. <br>Valid values: <ul><li>USPS_VALIDATE</li><li>CA_VALIDATE</li><li>GENERIC_VALIDATE</li><li>NAVTEQ_GEO_VALIDATE</li><li>TELEATLAS_GEO_VALIDATE</li></ul>
     *
     * @param string $resolutionMethodName
     *
     * @return self
     */
    public function setResolutionMethodName(string $resolutionMethodName) : self
    {
        $this->initialized['resolutionMethodName'] = true;
        $this->resolutionMethodName = $resolutionMethodName;
        return $this;
    }
    /**
     * Indicates if the resolved address is a Rural Route or Highway Contract (US only). It returns true if it is rural route. 
     *
     * @return bool
     */
    public function getRuralRouteHighwayContract() : bool
    {
        return $this->ruralRouteHighwayContract;
    }
    /**
     * Indicates if the resolved address is a Rural Route or Highway Contract (US only). It returns true if it is rural route. 
     *
     * @param bool $ruralRouteHighwayContract
     *
     * @return self
     */
    public function setRuralRouteHighwayContract(bool $ruralRouteHighwayContract) : self
    {
        $this->initialized['ruralRouteHighwayContract'] = true;
        $this->ruralRouteHighwayContract = $ruralRouteHighwayContract;
        return $this;
    }
    /**
     * Indicates the mail service is for those without permanent address. The mails for this address are held at a post office. Only applies to addresses that can be standardized against Postal Data. Not provided for US Geo Validated addresses. <br>Note: Only returned when the address cannot be resolved.
     *
     * @return bool
     */
    public function getGeneralDelivery() : bool
    {
        return $this->generalDelivery;
    }
    /**
     * Indicates the mail service is for those without permanent address. The mails for this address are held at a post office. Only applies to addresses that can be standardized against Postal Data. Not provided for US Geo Validated addresses. <br>Note: Only returned when the address cannot be resolved.
     *
     * @param bool $generalDelivery
     *
     * @return self
     */
    public function setGeneralDelivery(bool $generalDelivery) : self
    {
        $this->initialized['generalDelivery'] = true;
        $this->generalDelivery = $generalDelivery;
        return $this;
    }
    /**
     * These are the  key-value pair as additional information returned along with the address processed by the system. These attribute will list what is working and what is not on the input address. For More information, look in to Chapter Address Attributes in the Overview.<br><a onclick='loadDocReference("addressattributes")'>Click here to see Address Attributes</a>
     *
     * @return AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes
     */
    public function getAttributes() : AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes
    {
        return $this->attributes;
    }
    /**
     * These are the  key-value pair as additional information returned along with the address processed by the system. These attribute will list what is working and what is not on the input address. For More information, look in to Chapter Address Attributes in the Overview.<br><a onclick='loadDocReference("addressattributes")'>Click here to see Address Attributes</a>
     *
     * @param AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes $attributes
     *
     * @return self
     */
    public function setAttributes(AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemAttributes $attributes) : self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}