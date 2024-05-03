<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputlatestLocation extends \ArrayObject
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
     * Specifies value and unit of distance between the FedEx locations and the address specified.<br>Example: 2 KM
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocationDistance
     */
    protected $distance;
    /**
     * The contact and address information for a location.
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddress
     */
    protected $contactAndAddress;
    /**
     * This is the FedEx location id for the given location.<br> Example:DXBA
     *
     * @var string
     */
    protected $locationId;
    /**
     * Includes the days and times specific to the location
     *
     * @var list<LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem>
     */
    protected $storeHours;
    /**
     * List of FedEx Operating companies (FedEx Carriers) along with different service capabilities available with the location.
     *
     * @var list<LocationV1LocationsPostResponse200OutputlatestLocationCarrierDetailListItem>
     */
    protected $carrierDetailList;
    /**
     * The ISO6709GeographicCoordinates for a specific geographic location
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates
     */
    protected $geoPositionalCoordinates;
    /**
     * The FedEx Location Type.
     *
     * @var string
     */
    protected $locationType;
    /**
     * Attributes for the location.
     *
     * @var list<string>
     */
    protected $locationAttributeTypes;
    /**
     * Indicates if FedEx locker is available at the location.<br> Valid values: True, False.
     *
     * @var bool
     */
    protected $lockerAvailability;
    /**
     * This is the maximum package limits that are supported at the location.
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimits
     */
    protected $packageMaximumLimits;
    /**
     * Indicates the special instructions needed to access a location.
     *
     * @var string
     */
    protected $specialInstructions;
    /**
     * Indicates if the location supports RedirectToHold Service.
     *
     * @var string
     */
    protected $rthservice;
    /**
     * Location capabilities such as services, day of week, ability to dropoff, pickup shipments, ability to hold shipments for pickup, etc.
     *
     * @var LocationV1LocationsPostResponse200OutputlatestLocationLocationCapabilities
     */
    protected $locationCapabilities;
    /**
     * Specifies value and unit of distance between the FedEx locations and the address specified.<br>Example: 2 KM
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocationDistance
     */
    public function getDistance() : LocationV1LocationsPostResponse200OutputlatestLocationDistance
    {
        return $this->distance;
    }
    /**
     * Specifies value and unit of distance between the FedEx locations and the address specified.<br>Example: 2 KM
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocationDistance $distance
     *
     * @return self
     */
    public function setDistance(LocationV1LocationsPostResponse200OutputlatestLocationDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * The contact and address information for a location.
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddress
     */
    public function getContactAndAddress() : LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddress
    {
        return $this->contactAndAddress;
    }
    /**
     * The contact and address information for a location.
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddress $contactAndAddress
     *
     * @return self
     */
    public function setContactAndAddress(LocationV1LocationsPostResponse200OutputlatestLocationContactAndAddress $contactAndAddress) : self
    {
        $this->initialized['contactAndAddress'] = true;
        $this->contactAndAddress = $contactAndAddress;
        return $this;
    }
    /**
     * This is the FedEx location id for the given location.<br> Example:DXBA
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * This is the FedEx location id for the given location.<br> Example:DXBA
     *
     * @param string $locationId
     *
     * @return self
     */
    public function setLocationId(string $locationId) : self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * Includes the days and times specific to the location
     *
     * @return list<LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem>
     */
    public function getStoreHours() : array
    {
        return $this->storeHours;
    }
    /**
     * Includes the days and times specific to the location
     *
     * @param list<LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItem> $storeHours
     *
     * @return self
     */
    public function setStoreHours(array $storeHours) : self
    {
        $this->initialized['storeHours'] = true;
        $this->storeHours = $storeHours;
        return $this;
    }
    /**
     * List of FedEx Operating companies (FedEx Carriers) along with different service capabilities available with the location.
     *
     * @return list<LocationV1LocationsPostResponse200OutputlatestLocationCarrierDetailListItem>
     */
    public function getCarrierDetailList() : array
    {
        return $this->carrierDetailList;
    }
    /**
     * List of FedEx Operating companies (FedEx Carriers) along with different service capabilities available with the location.
     *
     * @param list<LocationV1LocationsPostResponse200OutputlatestLocationCarrierDetailListItem> $carrierDetailList
     *
     * @return self
     */
    public function setCarrierDetailList(array $carrierDetailList) : self
    {
        $this->initialized['carrierDetailList'] = true;
        $this->carrierDetailList = $carrierDetailList;
        return $this;
    }
    /**
     * The ISO6709GeographicCoordinates for a specific geographic location
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates
     */
    public function getGeoPositionalCoordinates() : LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates
    {
        return $this->geoPositionalCoordinates;
    }
    /**
     * The ISO6709GeographicCoordinates for a specific geographic location
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates $geoPositionalCoordinates
     *
     * @return self
     */
    public function setGeoPositionalCoordinates(LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates $geoPositionalCoordinates) : self
    {
        $this->initialized['geoPositionalCoordinates'] = true;
        $this->geoPositionalCoordinates = $geoPositionalCoordinates;
        return $this;
    }
    /**
     * The FedEx Location Type.
     *
     * @return string
     */
    public function getLocationType() : string
    {
        return $this->locationType;
    }
    /**
     * The FedEx Location Type.
     *
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType) : self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;
        return $this;
    }
    /**
     * Attributes for the location.
     *
     * @return list<string>
     */
    public function getLocationAttributeTypes() : array
    {
        return $this->locationAttributeTypes;
    }
    /**
     * Attributes for the location.
     *
     * @param list<string> $locationAttributeTypes
     *
     * @return self
     */
    public function setLocationAttributeTypes(array $locationAttributeTypes) : self
    {
        $this->initialized['locationAttributeTypes'] = true;
        $this->locationAttributeTypes = $locationAttributeTypes;
        return $this;
    }
    /**
     * Indicates if FedEx locker is available at the location.<br> Valid values: True, False.
     *
     * @return bool
     */
    public function getLockerAvailability() : bool
    {
        return $this->lockerAvailability;
    }
    /**
     * Indicates if FedEx locker is available at the location.<br> Valid values: True, False.
     *
     * @param bool $lockerAvailability
     *
     * @return self
     */
    public function setLockerAvailability(bool $lockerAvailability) : self
    {
        $this->initialized['lockerAvailability'] = true;
        $this->lockerAvailability = $lockerAvailability;
        return $this;
    }
    /**
     * This is the maximum package limits that are supported at the location.
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimits
     */
    public function getPackageMaximumLimits() : LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimits
    {
        return $this->packageMaximumLimits;
    }
    /**
     * This is the maximum package limits that are supported at the location.
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimits $packageMaximumLimits
     *
     * @return self
     */
    public function setPackageMaximumLimits(LocationV1LocationsPostResponse200OutputlatestLocationPackageMaximumLimits $packageMaximumLimits) : self
    {
        $this->initialized['packageMaximumLimits'] = true;
        $this->packageMaximumLimits = $packageMaximumLimits;
        return $this;
    }
    /**
     * Indicates the special instructions needed to access a location.
     *
     * @return string
     */
    public function getSpecialInstructions() : string
    {
        return $this->specialInstructions;
    }
    /**
     * Indicates the special instructions needed to access a location.
     *
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Indicates if the location supports RedirectToHold Service.
     *
     * @return string
     */
    public function getRthservice() : string
    {
        return $this->rthservice;
    }
    /**
     * Indicates if the location supports RedirectToHold Service.
     *
     * @param string $rthservice
     *
     * @return self
     */
    public function setRthservice(string $rthservice) : self
    {
        $this->initialized['rthservice'] = true;
        $this->rthservice = $rthservice;
        return $this;
    }
    /**
     * Location capabilities such as services, day of week, ability to dropoff, pickup shipments, ability to hold shipments for pickup, etc.
     *
     * @return LocationV1LocationsPostResponse200OutputlatestLocationLocationCapabilities
     */
    public function getLocationCapabilities() : LocationV1LocationsPostResponse200OutputlatestLocationLocationCapabilities
    {
        return $this->locationCapabilities;
    }
    /**
     * Location capabilities such as services, day of week, ability to dropoff, pickup shipments, ability to hold shipments for pickup, etc.
     *
     * @param LocationV1LocationsPostResponse200OutputlatestLocationLocationCapabilities $locationCapabilities
     *
     * @return self
     */
    public function setLocationCapabilities(LocationV1LocationsPostResponse200OutputlatestLocationLocationCapabilities $locationCapabilities) : self
    {
        $this->initialized['locationCapabilities'] = true;
        $this->locationCapabilities = $locationCapabilities;
        return $this;
    }
}