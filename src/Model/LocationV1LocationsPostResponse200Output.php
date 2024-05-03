<?php

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200Output extends \ArrayObject
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
     * Indicates the total number of locations that are displayed in the result.<br>Example: 13
     *
     * @var int
     */
    protected $totalResults;
    /**
     * Specifies the number of results returned in the reply.<br>Example: 10
     *
     * @var int
     */
    protected $resultsReturned;
    /**
     * The address provided in the request.
     *
     * @var LocationV1LocationsPostResponse200OutputmatchedAddress
     */
    protected $matchedAddress;
    /**
     * Identifies the geographic coordinates corresponding to the address specified. It is specified in ISO 6709 format.<br> Example: +40.75-074.00
     *
     * @var LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord
     */
    protected $matchedAddressGeoCoord;
    /**
     * List of FedEx locations meeting the search criteria.
     *
     * @var list<LocationV1LocationsPostResponse200OutputlocationDetailListItem>
     */
    protected $locationDetailList;
    /**
     * Specifies the alerts.
     *
     * @var list<LocationV1LocationsPostResponse200OutputalertsItem>
     */
    protected $alerts;
    /**
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @var LocationV1LocationsPostResponse200OutputnearestLocation
     */
    protected $nearestLocation;
    /**
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocation
     */
    protected $latestLocation;
    /**
     * Indicates the values for ambiguous address details.
     *
     * @var list<LocationV1LocationsPostResponse200OutputambiguousAddressItem>
     */
    protected $ambiguousAddress;
    /**
     * Indicates whether value for ambigous locations were returned or not. <br>Valid values: True, False.
     *
     * @var bool
     */
    protected $ambiguousLocationsReturned;
    /**
     * Indicates whether value for nearest locations were returned or not. <br>Valid values: True, False.
     *
     * @var bool
     */
    protected $nearestLocationReturned;
    /**
     * Indicates whether value for latest locations were returned or not. <br>Valid values: True, False.
     *
     * @var bool
     */
    protected $latestLocationReturned;
    /**
     * Code for locker availability
     *
     * @var int
     */
    protected $lockerAvailabilityCode;
    /**
     * Message for locker availability
     *
     * @var string
     */
    protected $lockerAvailabilityMessage;
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @var LocationV1LocationsPostResponse200Outputlocation
     */
    protected $location;
    /**
     * Specify the phone number If the locationSearchCriterion is set to 'PHONE_NUMBER'.The mobile numbers will not return results when set as a criterion. <br> Example: 9015551234
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specify the criterion to be used to return location results when there are multiple matches.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     *
     * @var string
     */
    protected $multipleMatchesAction;
    /**
     * Specifies how the location search results will be sorted in the reply.
     *
     * @var LocationV1LocationsPostResponse200Outputsort
     */
    protected $sort;
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @var LocationV1LocationsPostResponse200OutputtrackingInfo
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
     * Specify the type of service supported by a FedEx location for redirect to hold.<br>Valid values: FEDEX_EXPRESS, FEDEX_GROUND, FEDEX_GROUND_HOME_DELIVERY.
     *
     * @var string
     */
    protected $redirectToHoldType;
    /**
     * Indicates the attributes for the location.
     *
     * @var list<string>
     */
    protected $locationAttrTypes;
    /**
     * Specify to filter the locations based on their capabilities.
     *
     * @var list<LocationV1LocationsPostResponse200OutputlocationCapabilitiesItem>
     */
    protected $locationCapabilities;
    /**
     * Any required location supported package constraints to narrow the search.<br>For example, a package weighing more than 151 pounds may not be supported at all location types.  Drop box location would be excluded.
     *
     * @var list<LocationV1LocationsPostResponse200OutputpackageMaximumLimitsItem>
     */
    protected $packageMaximumLimits;
    /**
     * Results filter which narrows the search to specific types of FedEx Locations.
     *
     * @var list<string>
     */
    protected $locationTypes;
    /**
     * Indicates true if the location holiday list is desired in the results; otherwise false <br>Valid values: True, False.
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
     * The drop-off service types supported by the specified location.<br>Example: FedEx Ground.
     *
     * @var string
     */
    protected $dropOffServiceType;
    /**
     * location search based on searchBy 
     *
     * @var string
     */
    protected $searchBy;
    /**
     * location content options
     *
     * @var string
     */
    protected $contentOptions;
    /**
     * Unique code to identify the transporter.
     *
     * @var list<string>
     */
    protected $carrierCodes;
    /**
     * Get a call. Valid values: True, False.
     *
     * @var bool
     */
    protected $getCall;
    /**
     * Indicates the total number of locations that are displayed in the result.<br>Example: 13
     *
     * @return int
     */
    public function getTotalResults() : int
    {
        return $this->totalResults;
    }
    /**
     * Indicates the total number of locations that are displayed in the result.<br>Example: 13
     *
     * @param int $totalResults
     *
     * @return self
     */
    public function setTotalResults(int $totalResults) : self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * Specifies the number of results returned in the reply.<br>Example: 10
     *
     * @return int
     */
    public function getResultsReturned() : int
    {
        return $this->resultsReturned;
    }
    /**
     * Specifies the number of results returned in the reply.<br>Example: 10
     *
     * @param int $resultsReturned
     *
     * @return self
     */
    public function setResultsReturned(int $resultsReturned) : self
    {
        $this->initialized['resultsReturned'] = true;
        $this->resultsReturned = $resultsReturned;
        return $this;
    }
    /**
     * The address provided in the request.
     *
     * @return LocationV1LocationsPostResponse200OutputmatchedAddress
     */
    public function getMatchedAddress() : LocationV1LocationsPostResponse200OutputmatchedAddress
    {
        return $this->matchedAddress;
    }
    /**
     * The address provided in the request.
     *
     * @param LocationV1LocationsPostResponse200OutputmatchedAddress $matchedAddress
     *
     * @return self
     */
    public function setMatchedAddress(LocationV1LocationsPostResponse200OutputmatchedAddress $matchedAddress) : self
    {
        $this->initialized['matchedAddress'] = true;
        $this->matchedAddress = $matchedAddress;
        return $this;
    }
    /**
     * Identifies the geographic coordinates corresponding to the address specified. It is specified in ISO 6709 format.<br> Example: +40.75-074.00
     *
     * @return LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord
     */
    public function getMatchedAddressGeoCoord() : LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord
    {
        return $this->matchedAddressGeoCoord;
    }
    /**
     * Identifies the geographic coordinates corresponding to the address specified. It is specified in ISO 6709 format.<br> Example: +40.75-074.00
     *
     * @param LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord $matchedAddressGeoCoord
     *
     * @return self
     */
    public function setMatchedAddressGeoCoord(LocationV1LocationsPostResponse200OutputmatchedAddressGeoCoord $matchedAddressGeoCoord) : self
    {
        $this->initialized['matchedAddressGeoCoord'] = true;
        $this->matchedAddressGeoCoord = $matchedAddressGeoCoord;
        return $this;
    }
    /**
     * List of FedEx locations meeting the search criteria.
     *
     * @return list<LocationV1LocationsPostResponse200OutputlocationDetailListItem>
     */
    public function getLocationDetailList() : array
    {
        return $this->locationDetailList;
    }
    /**
     * List of FedEx locations meeting the search criteria.
     *
     * @param list<LocationV1LocationsPostResponse200OutputlocationDetailListItem> $locationDetailList
     *
     * @return self
     */
    public function setLocationDetailList(array $locationDetailList) : self
    {
        $this->initialized['locationDetailList'] = true;
        $this->locationDetailList = $locationDetailList;
        return $this;
    }
    /**
     * Specifies the alerts.
     *
     * @return list<LocationV1LocationsPostResponse200OutputalertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * Specifies the alerts.
     *
     * @param list<LocationV1LocationsPostResponse200OutputalertsItem> $alerts
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
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @return LocationV1LocationsPostResponse200OutputnearestLocation
     */
    public function getNearestLocation() : LocationV1LocationsPostResponse200OutputnearestLocation
    {
        return $this->nearestLocation;
    }
    /**
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @param LocationV1LocationsPostResponse200OutputnearestLocation $nearestLocation
     *
     * @return self
     */
    public function setNearestLocation(LocationV1LocationsPostResponse200OutputnearestLocation $nearestLocation) : self
    {
        $this->initialized['nearestLocation'] = true;
        $this->nearestLocation = $nearestLocation;
        return $this;
    }
    /**
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocation
     */
    public function getLatestLocation() : LocationV1LocationsPostResponse200OutputlatestLocation
    {
        return $this->latestLocation;
    }
    /**
     * Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocation $latestLocation
     *
     * @return self
     */
    public function setLatestLocation(LocationV1LocationsPostResponse200OutputlatestLocation $latestLocation) : self
    {
        $this->initialized['latestLocation'] = true;
        $this->latestLocation = $latestLocation;
        return $this;
    }
    /**
     * Indicates the values for ambiguous address details.
     *
     * @return list<LocationV1LocationsPostResponse200OutputambiguousAddressItem>
     */
    public function getAmbiguousAddress() : array
    {
        return $this->ambiguousAddress;
    }
    /**
     * Indicates the values for ambiguous address details.
     *
     * @param list<LocationV1LocationsPostResponse200OutputambiguousAddressItem> $ambiguousAddress
     *
     * @return self
     */
    public function setAmbiguousAddress(array $ambiguousAddress) : self
    {
        $this->initialized['ambiguousAddress'] = true;
        $this->ambiguousAddress = $ambiguousAddress;
        return $this;
    }
    /**
     * Indicates whether value for ambigous locations were returned or not. <br>Valid values: True, False.
     *
     * @return bool
     */
    public function getAmbiguousLocationsReturned() : bool
    {
        return $this->ambiguousLocationsReturned;
    }
    /**
     * Indicates whether value for ambigous locations were returned or not. <br>Valid values: True, False.
     *
     * @param bool $ambiguousLocationsReturned
     *
     * @return self
     */
    public function setAmbiguousLocationsReturned(bool $ambiguousLocationsReturned) : self
    {
        $this->initialized['ambiguousLocationsReturned'] = true;
        $this->ambiguousLocationsReturned = $ambiguousLocationsReturned;
        return $this;
    }
    /**
     * Indicates whether value for nearest locations were returned or not. <br>Valid values: True, False.
     *
     * @return bool
     */
    public function getNearestLocationReturned() : bool
    {
        return $this->nearestLocationReturned;
    }
    /**
     * Indicates whether value for nearest locations were returned or not. <br>Valid values: True, False.
     *
     * @param bool $nearestLocationReturned
     *
     * @return self
     */
    public function setNearestLocationReturned(bool $nearestLocationReturned) : self
    {
        $this->initialized['nearestLocationReturned'] = true;
        $this->nearestLocationReturned = $nearestLocationReturned;
        return $this;
    }
    /**
     * Indicates whether value for latest locations were returned or not. <br>Valid values: True, False.
     *
     * @return bool
     */
    public function getLatestLocationReturned() : bool
    {
        return $this->latestLocationReturned;
    }
    /**
     * Indicates whether value for latest locations were returned or not. <br>Valid values: True, False.
     *
     * @param bool $latestLocationReturned
     *
     * @return self
     */
    public function setLatestLocationReturned(bool $latestLocationReturned) : self
    {
        $this->initialized['latestLocationReturned'] = true;
        $this->latestLocationReturned = $latestLocationReturned;
        return $this;
    }
    /**
     * Code for locker availability
     *
     * @return int
     */
    public function getLockerAvailabilityCode() : int
    {
        return $this->lockerAvailabilityCode;
    }
    /**
     * Code for locker availability
     *
     * @param int $lockerAvailabilityCode
     *
     * @return self
     */
    public function setLockerAvailabilityCode(int $lockerAvailabilityCode) : self
    {
        $this->initialized['lockerAvailabilityCode'] = true;
        $this->lockerAvailabilityCode = $lockerAvailabilityCode;
        return $this;
    }
    /**
     * Message for locker availability
     *
     * @return string
     */
    public function getLockerAvailabilityMessage() : string
    {
        return $this->lockerAvailabilityMessage;
    }
    /**
     * Message for locker availability
     *
     * @param string $lockerAvailabilityMessage
     *
     * @return self
     */
    public function setLockerAvailabilityMessage(string $lockerAvailabilityMessage) : self
    {
        $this->initialized['lockerAvailabilityMessage'] = true;
        $this->lockerAvailabilityMessage = $lockerAvailabilityMessage;
        return $this;
    }
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @return LocationV1LocationsPostResponse200Outputlocation
     */
    public function getLocation() : LocationV1LocationsPostResponse200Outputlocation
    {
        return $this->location;
    }
    /**
     * Based on the locationSearchCriterion value specified, the location element specifies the minimum requirement for address search like postalCode, countryCode, GeoCodes or city.<br><br><i>Note: Country code is REQUIRED for the search.</i>
     *
     * @param LocationV1LocationsPostResponse200Outputlocation $location
     *
     * @return self
     */
    public function setLocation(LocationV1LocationsPostResponse200Outputlocation $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Specify the phone number If the locationSearchCriterion is set to 'PHONE_NUMBER'.The mobile numbers will not return results when set as a criterion. <br> Example: 9015551234
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Specify the phone number If the locationSearchCriterion is set to 'PHONE_NUMBER'.The mobile numbers will not return results when set as a criterion. <br> Example: 9015551234
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
     * Specify the criterion to be used to return location results when there are multiple matches.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     *
     * @return string
     */
    public function getMultipleMatchesAction() : string
    {
        return $this->multipleMatchesAction;
    }
    /**
     * Specify the criterion to be used to return location results when there are multiple matches.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
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
     * @return LocationV1LocationsPostResponse200Outputsort
     */
    public function getSort() : LocationV1LocationsPostResponse200Outputsort
    {
        return $this->sort;
    }
    /**
     * Specifies how the location search results will be sorted in the reply.
     *
     * @param LocationV1LocationsPostResponse200Outputsort $sort
     *
     * @return self
     */
    public function setSort(LocationV1LocationsPostResponse200Outputsort $sort) : self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @return LocationV1LocationsPostResponse200OutputtrackingInfo
     */
    public function getTrackingInfo() : LocationV1LocationsPostResponse200OutputtrackingInfo
    {
        return $this->trackingInfo;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     *
     * @param LocationV1LocationsPostResponse200OutputtrackingInfo $trackingInfo
     *
     * @return self
     */
    public function setTrackingInfo(LocationV1LocationsPostResponse200OutputtrackingInfo $trackingInfo) : self
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
     * Specify the type of service supported by a FedEx location for redirect to hold.<br>Valid values: FEDEX_EXPRESS, FEDEX_GROUND, FEDEX_GROUND_HOME_DELIVERY.
     *
     * @return string
     */
    public function getRedirectToHoldType() : string
    {
        return $this->redirectToHoldType;
    }
    /**
     * Specify the type of service supported by a FedEx location for redirect to hold.<br>Valid values: FEDEX_EXPRESS, FEDEX_GROUND, FEDEX_GROUND_HOME_DELIVERY.
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
     * Indicates the attributes for the location.
     *
     * @return list<string>
     */
    public function getLocationAttrTypes() : array
    {
        return $this->locationAttrTypes;
    }
    /**
     * Indicates the attributes for the location.
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
     * @return list<LocationV1LocationsPostResponse200OutputlocationCapabilitiesItem>
     */
    public function getLocationCapabilities() : array
    {
        return $this->locationCapabilities;
    }
    /**
     * Specify to filter the locations based on their capabilities.
     *
     * @param list<LocationV1LocationsPostResponse200OutputlocationCapabilitiesItem> $locationCapabilities
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
     * Any required location supported package constraints to narrow the search.<br>For example, a package weighing more than 151 pounds may not be supported at all location types.  Drop box location would be excluded.
     *
     * @return list<LocationV1LocationsPostResponse200OutputpackageMaximumLimitsItem>
     */
    public function getPackageMaximumLimits() : array
    {
        return $this->packageMaximumLimits;
    }
    /**
     * Any required location supported package constraints to narrow the search.<br>For example, a package weighing more than 151 pounds may not be supported at all location types.  Drop box location would be excluded.
     *
     * @param list<LocationV1LocationsPostResponse200OutputpackageMaximumLimitsItem> $packageMaximumLimits
     *
     * @return self
     */
    public function setPackageMaximumLimits(array $packageMaximumLimits) : self
    {
        $this->initialized['packageMaximumLimits'] = true;
        $this->packageMaximumLimits = $packageMaximumLimits;
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
     * Indicates true if the location holiday list is desired in the results; otherwise false <br>Valid values: True, False.
     *
     * @return bool
     */
    public function getIncludeHoliday() : bool
    {
        return $this->includeHoliday;
    }
    /**
     * Indicates true if the location holiday list is desired in the results; otherwise false <br>Valid values: True, False.
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
     * The drop-off service types supported by the specified location.<br>Example: FedEx Ground.
     *
     * @return string
     */
    public function getDropOffServiceType() : string
    {
        return $this->dropOffServiceType;
    }
    /**
     * The drop-off service types supported by the specified location.<br>Example: FedEx Ground.
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
     * location search based on searchBy 
     *
     * @return string
     */
    public function getSearchBy() : string
    {
        return $this->searchBy;
    }
    /**
     * location search based on searchBy 
     *
     * @param string $searchBy
     *
     * @return self
     */
    public function setSearchBy(string $searchBy) : self
    {
        $this->initialized['searchBy'] = true;
        $this->searchBy = $searchBy;
        return $this;
    }
    /**
     * location content options
     *
     * @return string
     */
    public function getContentOptions() : string
    {
        return $this->contentOptions;
    }
    /**
     * location content options
     *
     * @param string $contentOptions
     *
     * @return self
     */
    public function setContentOptions(string $contentOptions) : self
    {
        $this->initialized['contentOptions'] = true;
        $this->contentOptions = $contentOptions;
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
     * Get a call. Valid values: True, False.
     *
     * @return bool
     */
    public function getGetCall() : bool
    {
        return $this->getCall;
    }
    /**
     * Get a call. Valid values: True, False.
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