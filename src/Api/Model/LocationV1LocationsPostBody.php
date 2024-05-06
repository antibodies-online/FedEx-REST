<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBody extends \ArrayObject
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
     * Use this object to specify all the inputs to get the locations details.
     *
     * @var LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters
     */
    protected $locationsSummaryRequestControlParameters;
    /**
     * Specify the constraints to be applied to the location attributes.
     *
     * @var LocationV1LocationsPostBodyConstraints
     */
    protected $constraints;
    /**
     * Specify the criteria to be used to search for FedEx locations. Default value is ADDRESS if no value is passed.<p>Valid values: <ul><li>ADDRESS &ndash; Search by address. Location detail data is required.</li><li>GEOGRAPHIC_COORDINATES &ndash; Search by geocodes. Location geocodes are required.</li><li>PHONE_NUMBER &ndash; Search by phone number. Location Phone number is required.</li></ul></p><p><i>Note: Country code is REQUIRED when searching by any of the LocationsSearchCriterion, even PhoneNumber and GeorgraphicCoordinates.</i></p>
     *
     * @var string
     */
    protected $locationSearchCriterion;
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.Location phone number is required. Only landline number is allowed.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @var LocationV1LocationsPostBodyLocation
     */
    protected $location;
    /**
     * Specify the phone number(Only LandLine allowed) if the locationSearchCriterion is set to 'PHONE_NUMBER'.Given that is the case, the location search will be made based on the phone number value and the location object(postalCode&countryCode) will be completely ignored. <br> Example: 9015551234
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify the criterion to be used to return location results when there are multiple matches.<br>Valid values: RETURN_ALL,RETURN_ERROR, RETURN_FIRST.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     *
     * @var string
     */
    protected $multipleMatchesAction;
    /**
     * Specifies how the location search results will be sorted in the reply.
     *
     * @var LocationV1LocationsPostBodySort
     */
    protected $sort;
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @var LocationV1LocationsPostBodyTrackingInfo
     */
    protected $trackingInfo;
    /**
     * Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     *
     * @var bool
     */
    protected $sameState;
    /**
     * Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     *
     * @var bool
     */
    protected $sameCountry;
    /**
     * Specify the type of service supported by a FedEx location for redirect to hold.
     *
     * @var string
     */
    protected $redirectToHoldType;
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.<br>Note: In order to filter for DROP_BOX location, need to add locationTypes as FEDEX_SELF_SERVICE_LOCATION
     *
     * @var list<string>
     */
    protected $locationAttrTypes;
    /**
     * Specify to filter the locations based on their capabilities.
     *
     * @var list<LocationV1LocationsPostBodyLocationCapabilitiesItem>
     */
    protected $locationCapabilities;
    /**
     * Specify location supported package constraints to narrow the search.<br><br>For example, a package weighing more than 151 pounds may not be supported at all location types. Drop box location would be excluded.<p><i>Note: The package attributes inputs are only recognized/supported for FedEx OnSite Locations.</i></p>
     *
     * @var list<LocationV1LocationsPostBodyPackageAttributesItem>
     */
    protected $packageAttributes;
    /**
     * Results filter which narrows the search to specific types of FedEx Locations. 
     *
     * @var list<string>
     */
    protected $locationTypes;
    /**
     * Indicates true if the location holiday list is desired in the results; otherwise false <br> Valid values: True, False.
     *
     * @var bool
     */
    protected $includeHoliday;
    /**
     * Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     *
     * @var string
     */
    protected $dropoffTime;
    /**
     * The drop-off service types supported by the specified location. If sort criteria is given as  LATEST_EXPRESS_DROPOFF_TIME and dropoffservicetype is GROUND then backend  will take the SORT_BY_LATEST_GROUND_TIME as sort criteria.<br>Example: FedEx Ground.
     *
     * @var string
     */
    protected $dropOffServiceType;
    /**
     * Unique code to identify the transporter.
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * Get a call. <br>Valid values: True, False.
     *
     * @var bool
     */
    protected $getCall;
    /**
     * Use this object to specify all the inputs to get the locations details.
     *
     * @return LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters
     */
    public function getLocationsSummaryRequestControlParameters() : LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters
    {
        return $this->locationsSummaryRequestControlParameters;
    }
    /**
     * Use this object to specify all the inputs to get the locations details.
     *
     * @param LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters $locationsSummaryRequestControlParameters
     *
     * @return self
     */
    public function setLocationsSummaryRequestControlParameters(LocationV1LocationsPostBodyLocationsSummaryRequestControlParameters $locationsSummaryRequestControlParameters) : self
    {
        $this->initialized['locationsSummaryRequestControlParameters'] = true;
        $this->locationsSummaryRequestControlParameters = $locationsSummaryRequestControlParameters;
        return $this;
    }
    /**
     * Specify the constraints to be applied to the location attributes.
     *
     * @return LocationV1LocationsPostBodyConstraints
     */
    public function getConstraints() : LocationV1LocationsPostBodyConstraints
    {
        return $this->constraints;
    }
    /**
     * Specify the constraints to be applied to the location attributes.
     *
     * @param LocationV1LocationsPostBodyConstraints $constraints
     *
     * @return self
     */
    public function setConstraints(LocationV1LocationsPostBodyConstraints $constraints) : self
    {
        $this->initialized['constraints'] = true;
        $this->constraints = $constraints;
        return $this;
    }
    /**
     * Specify the criteria to be used to search for FedEx locations. Default value is ADDRESS if no value is passed.<p>Valid values: <ul><li>ADDRESS &ndash; Search by address. Location detail data is required.</li><li>GEOGRAPHIC_COORDINATES &ndash; Search by geocodes. Location geocodes are required.</li><li>PHONE_NUMBER &ndash; Search by phone number. Location Phone number is required.</li></ul></p><p><i>Note: Country code is REQUIRED when searching by any of the LocationsSearchCriterion, even PhoneNumber and GeorgraphicCoordinates.</i></p>
     *
     * @return string
     */
    public function getLocationSearchCriterion() : string
    {
        return $this->locationSearchCriterion;
    }
    /**
     * Specify the criteria to be used to search for FedEx locations. Default value is ADDRESS if no value is passed.<p>Valid values: <ul><li>ADDRESS &ndash; Search by address. Location detail data is required.</li><li>GEOGRAPHIC_COORDINATES &ndash; Search by geocodes. Location geocodes are required.</li><li>PHONE_NUMBER &ndash; Search by phone number. Location Phone number is required.</li></ul></p><p><i>Note: Country code is REQUIRED when searching by any of the LocationsSearchCriterion, even PhoneNumber and GeorgraphicCoordinates.</i></p>
     *
     * @param string $locationSearchCriterion
     *
     * @return self
     */
    public function setLocationSearchCriterion(string $locationSearchCriterion) : self
    {
        $this->initialized['locationSearchCriterion'] = true;
        $this->locationSearchCriterion = $locationSearchCriterion;
        return $this;
    }
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.Location phone number is required. Only landline number is allowed.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @return LocationV1LocationsPostBodyLocation
     */
    public function getLocation() : LocationV1LocationsPostBodyLocation
    {
        return $this->location;
    }
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.Location phone number is required. Only landline number is allowed.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @param LocationV1LocationsPostBodyLocation $location
     *
     * @return self
     */
    public function setLocation(LocationV1LocationsPostBodyLocation $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Specify the phone number(Only LandLine allowed) if the locationSearchCriterion is set to 'PHONE_NUMBER'.Given that is the case, the location search will be made based on the phone number value and the location object(postalCode&countryCode) will be completely ignored. <br> Example: 9015551234
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Specify the phone number(Only LandLine allowed) if the locationSearchCriterion is set to 'PHONE_NUMBER'.Given that is the case, the location search will be made based on the phone number value and the location object(postalCode&countryCode) will be completely ignored. <br> Example: 9015551234
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Specify the criterion to be used to return location results when there are multiple matches.<br>Valid values: RETURN_ALL,RETURN_ERROR, RETURN_FIRST.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     *
     * @return string
     */
    public function getMultipleMatchesAction() : string
    {
        return $this->multipleMatchesAction;
    }
    /**
     * Specify the criterion to be used to return location results when there are multiple matches.<br>Valid values: RETURN_ALL,RETURN_ERROR, RETURN_FIRST.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     *
     * @param string $multipleMatchesAction
     *
     * @return self
     */
    public function setMultipleMatchesAction(string $multipleMatchesAction) : self
    {
        $this->initialized['multipleMatchesAction'] = true;
        $this->multipleMatchesAction = $multipleMatchesAction;
        return $this;
    }
    /**
     * Specifies how the location search results will be sorted in the reply.
     *
     * @return LocationV1LocationsPostBodySort
     */
    public function getSort() : LocationV1LocationsPostBodySort
    {
        return $this->sort;
    }
    /**
     * Specifies how the location search results will be sorted in the reply.
     *
     * @param LocationV1LocationsPostBodySort $sort
     *
     * @return self
     */
    public function setSort(LocationV1LocationsPostBodySort $sort) : self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @return LocationV1LocationsPostBodyTrackingInfo
     */
    public function getTrackingInfo() : LocationV1LocationsPostBodyTrackingInfo
    {
        return $this->trackingInfo;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @param LocationV1LocationsPostBodyTrackingInfo $trackingInfo
     *
     * @return self
     */
    public function setTrackingInfo(LocationV1LocationsPostBodyTrackingInfo $trackingInfo) : self
    {
        $this->initialized['trackingInfo'] = true;
        $this->trackingInfo = $trackingInfo;
        return $this;
    }
    /**
     * Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     *
     * @return bool
     */
    public function getSameState() : bool
    {
        return $this->sameState;
    }
    /**
     * Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     *
     * @param bool $sameState
     *
     * @return self
     */
    public function setSameState(bool $sameState) : self
    {
        $this->initialized['sameState'] = true;
        $this->sameState = $sameState;
        return $this;
    }
    /**
     * Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     *
     * @return bool
     */
    public function getSameCountry() : bool
    {
        return $this->sameCountry;
    }
    /**
     * Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     *
     * @param bool $sameCountry
     *
     * @return self
     */
    public function setSameCountry(bool $sameCountry) : self
    {
        $this->initialized['sameCountry'] = true;
        $this->sameCountry = $sameCountry;
        return $this;
    }
    /**
     * Specify the type of service supported by a FedEx location for redirect to hold.
     *
     * @return string
     */
    public function getRedirectToHoldType() : string
    {
        return $this->redirectToHoldType;
    }
    /**
     * Specify the type of service supported by a FedEx location for redirect to hold.
     *
     * @param string $redirectToHoldType
     *
     * @return self
     */
    public function setRedirectToHoldType(string $redirectToHoldType) : self
    {
        $this->initialized['redirectToHoldType'] = true;
        $this->redirectToHoldType = $redirectToHoldType;
        return $this;
    }
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.<br>Note: In order to filter for DROP_BOX location, need to add locationTypes as FEDEX_SELF_SERVICE_LOCATION
     *
     * @return list<string>
     */
    public function getLocationAttrTypes() : array
    {
        return $this->locationAttrTypes;
    }
    /**
     * Specify attributes to filter location types. If more than one value is specified, only those locations that have all the specified attributes will be returned.<br>Note: In order to filter for DROP_BOX location, need to add locationTypes as FEDEX_SELF_SERVICE_LOCATION
     *
     * @param list<string> $locationAttrTypes
     *
     * @return self
     */
    public function setLocationAttrTypes(array $locationAttrTypes) : self
    {
        $this->initialized['locationAttrTypes'] = true;
        $this->locationAttrTypes = $locationAttrTypes;
        return $this;
    }
    /**
     * Specify to filter the locations based on their capabilities.
     *
     * @return list<LocationV1LocationsPostBodyLocationCapabilitiesItem>
     */
    public function getLocationCapabilities() : array
    {
        return $this->locationCapabilities;
    }
    /**
     * Specify to filter the locations based on their capabilities.
     *
     * @param list<LocationV1LocationsPostBodyLocationCapabilitiesItem> $locationCapabilities
     *
     * @return self
     */
    public function setLocationCapabilities(array $locationCapabilities) : self
    {
        $this->initialized['locationCapabilities'] = true;
        $this->locationCapabilities = $locationCapabilities;
        return $this;
    }
    /**
     * Specify location supported package constraints to narrow the search.<br><br>For example, a package weighing more than 151 pounds may not be supported at all location types. Drop box location would be excluded.<p><i>Note: The package attributes inputs are only recognized/supported for FedEx OnSite Locations.</i></p>
     *
     * @return list<LocationV1LocationsPostBodyPackageAttributesItem>
     */
    public function getPackageAttributes() : array
    {
        return $this->packageAttributes;
    }
    /**
     * Specify location supported package constraints to narrow the search.<br><br>For example, a package weighing more than 151 pounds may not be supported at all location types. Drop box location would be excluded.<p><i>Note: The package attributes inputs are only recognized/supported for FedEx OnSite Locations.</i></p>
     *
     * @param list<LocationV1LocationsPostBodyPackageAttributesItem> $packageAttributes
     *
     * @return self
     */
    public function setPackageAttributes(array $packageAttributes) : self
    {
        $this->initialized['packageAttributes'] = true;
        $this->packageAttributes = $packageAttributes;
        return $this;
    }
    /**
     * Results filter which narrows the search to specific types of FedEx Locations. 
     *
     * @return list<string>
     */
    public function getLocationTypes() : array
    {
        return $this->locationTypes;
    }
    /**
     * Results filter which narrows the search to specific types of FedEx Locations. 
     *
     * @param list<string> $locationTypes
     *
     * @return self
     */
    public function setLocationTypes(array $locationTypes) : self
    {
        $this->initialized['locationTypes'] = true;
        $this->locationTypes = $locationTypes;
        return $this;
    }
    /**
     * Indicates true if the location holiday list is desired in the results; otherwise false <br> Valid values: True, False.
     *
     * @return bool
     */
    public function getIncludeHoliday() : bool
    {
        return $this->includeHoliday;
    }
    /**
     * Indicates true if the location holiday list is desired in the results; otherwise false <br> Valid values: True, False.
     *
     * @param bool $includeHoliday
     *
     * @return self
     */
    public function setIncludeHoliday(bool $includeHoliday) : self
    {
        $this->initialized['includeHoliday'] = true;
        $this->includeHoliday = $includeHoliday;
        return $this;
    }
    /**
     * Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     *
     * @return string
     */
    public function getDropoffTime() : string
    {
        return $this->dropoffTime;
    }
    /**
     * Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     *
     * @param string $dropoffTime
     *
     * @return self
     */
    public function setDropoffTime(string $dropoffTime) : self
    {
        $this->initialized['dropoffTime'] = true;
        $this->dropoffTime = $dropoffTime;
        return $this;
    }
    /**
     * The drop-off service types supported by the specified location. If sort criteria is given as  LATEST_EXPRESS_DROPOFF_TIME and dropoffservicetype is GROUND then backend  will take the SORT_BY_LATEST_GROUND_TIME as sort criteria.<br>Example: FedEx Ground.
     *
     * @return string
     */
    public function getDropOffServiceType() : string
    {
        return $this->dropOffServiceType;
    }
    /**
     * The drop-off service types supported by the specified location. If sort criteria is given as  LATEST_EXPRESS_DROPOFF_TIME and dropoffservicetype is GROUND then backend  will take the SORT_BY_LATEST_GROUND_TIME as sort criteria.<br>Example: FedEx Ground.
     *
     * @param string $dropOffServiceType
     *
     * @return self
     */
    public function setDropOffServiceType(string $dropOffServiceType) : self
    {
        $this->initialized['dropOffServiceType'] = true;
        $this->dropOffServiceType = $dropOffServiceType;
        return $this;
    }
    /**
     * Unique code to identify the transporter.
     *
     * @return list<string>
     */
    public function getCarrierCodes() : array
    {
        return $this->carrierCodes;
    }
    /**
     * Unique code to identify the transporter.
     *
     * @param list<string> $carrierCodes
     *
     * @return self
     */
    public function setCarrierCodes(array $carrierCodes) : self
    {
        $this->initialized['carrierCodes'] = true;
        $this->carrierCodes = $carrierCodes;
        return $this;
    }
    /**
     * Get a call. <br>Valid values: True, False.
     *
     * @return bool
     */
    public function getGetCall() : bool
    {
        return $this->getCall;
    }
    /**
     * Get a call. <br>Valid values: True, False.
     *
     * @param bool $getCall
     *
     * @return self
     */
    public function setGetCall(bool $getCall) : self
    {
        $this->initialized['getCall'] = true;
        $this->getCall = $getCall;
        return $this;
    }
}