<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation extends \ArrayObject
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
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates
     */
    protected $geoPositionalCoordinates;
    /**
     * Specifies the store hours.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem>
     */
    protected $storeHours;
    /**
     * The unique FedEx location identifier. <br>Example: HKAA
     *
     * @var string
     */
    protected $locationId;
    /**
     * Specifies the special instructions.
     *
     * @var string
     */
    protected $specialInstructions;
    /**
     * Specifies the location attribute type list.
     *
     * @var list<string>
     */
    protected $locationAttributeTypes;
    /**
     * Specifies the map URL.
     *
     * @var string
     */
    protected $mapURL;
    /**
     * Specifies the location type.
     *
     * @var string
     */
    protected $locationType;
    /**
     * Specify the contact and address details of a location.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress
     */
    protected $contactAndAddress;
    /**
     * Specifies the carrierDetails.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItem>
     */
    protected $carrierDetails;
    /**
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates
     */
    public function getGeoPositionalCoordinates() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates
    {
        return $this->geoPositionalCoordinates;
    }
    /**
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates $geoPositionalCoordinates
     *
     * @return self
     */
    public function setGeoPositionalCoordinates(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates $geoPositionalCoordinates) : self
    {
        $this->initialized['geoPositionalCoordinates'] = true;
        $this->geoPositionalCoordinates = $geoPositionalCoordinates;
        return $this;
    }
    /**
     * Specifies the store hours.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem>
     */
    public function getStoreHours() : array
    {
        return $this->storeHours;
    }
    /**
     * Specifies the store hours.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationstoreHoursItem> $storeHours
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
     * The unique FedEx location identifier. <br>Example: HKAA
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * The unique FedEx location identifier. <br>Example: HKAA
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
     * Specifies the special instructions.
     *
     * @return string
     */
    public function getSpecialInstructions() : string
    {
        return $this->specialInstructions;
    }
    /**
     * Specifies the special instructions.
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
     * Specifies the location attribute type list.
     *
     * @return list<string>
     */
    public function getLocationAttributeTypes() : array
    {
        return $this->locationAttributeTypes;
    }
    /**
     * Specifies the location attribute type list.
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
     * Specifies the map URL.
     *
     * @return string
     */
    public function getMapURL() : string
    {
        return $this->mapURL;
    }
    /**
     * Specifies the map URL.
     *
     * @param string $mapURL
     *
     * @return self
     */
    public function setMapURL(string $mapURL) : self
    {
        $this->initialized['mapURL'] = true;
        $this->mapURL = $mapURL;
        return $this;
    }
    /**
     * Specifies the location type.
     *
     * @return string
     */
    public function getLocationType() : string
    {
        return $this->locationType;
    }
    /**
     * Specifies the location type.
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
     * Specify the contact and address details of a location.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress
     */
    public function getContactAndAddress() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress
    {
        return $this->contactAndAddress;
    }
    /**
     * Specify the contact and address details of a location.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress $contactAndAddress
     *
     * @return self
     */
    public function setContactAndAddress(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcontactAndAddress $contactAndAddress) : self
    {
        $this->initialized['contactAndAddress'] = true;
        $this->contactAndAddress = $contactAndAddress;
        return $this;
    }
    /**
     * Specifies the carrierDetails.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItem>
     */
    public function getCarrierDetails() : array
    {
        return $this->carrierDetails;
    }
    /**
     * Specifies the carrierDetails.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationcarrierDetailsItem> $carrierDetails
     *
     * @return self
     */
    public function setCarrierDetails(array $carrierDetails) : self
    {
        $this->initialized['carrierDetails'] = true;
        $this->carrierDetails = $carrierDetails;
        return $this;
    }
}