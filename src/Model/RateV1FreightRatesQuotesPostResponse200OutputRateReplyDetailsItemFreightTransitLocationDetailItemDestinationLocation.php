<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation extends \ArrayObject
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
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates
     */
    protected $geoPositionalCoordinates;
    /**
     * Specifies the store hours.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationstoreHoursItem>
     */
    protected $storeHours;
    /**
     * The unique FedEx location identifier. <br>Example: HKAA.
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
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcontactAndAddress
     */
    protected $contactAndAddress;
    /**
     * Specifies the carrierDetails.
     *
     * @var list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem>
     */
    protected $carrierDetails;

    /**
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     */
    public function getGeoPositionalCoordinates(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates
    {
        return $this->geoPositionalCoordinates;
    }

    /**
     * The ISO6709 GeographicCoordinates for a specific geographic location.
     */
    public function setGeoPositionalCoordinates(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationgeoPositionalCoordinates $geoPositionalCoordinates): self
    {
        $this->initialized['geoPositionalCoordinates'] = true;
        $this->geoPositionalCoordinates = $geoPositionalCoordinates;

        return $this;
    }

    /**
     * Specifies the store hours.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationstoreHoursItem>
     */
    public function getStoreHours(): array
    {
        return $this->storeHours;
    }

    /**
     * Specifies the store hours.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationstoreHoursItem> $storeHours
     */
    public function setStoreHours(array $storeHours): self
    {
        $this->initialized['storeHours'] = true;
        $this->storeHours = $storeHours;

        return $this;
    }

    /**
     * The unique FedEx location identifier. <br>Example: HKAA.
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * The unique FedEx location identifier. <br>Example: HKAA.
     */
    public function setLocationId(string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Specifies the special instructions.
     */
    public function getSpecialInstructions(): string
    {
        return $this->specialInstructions;
    }

    /**
     * Specifies the special instructions.
     */
    public function setSpecialInstructions(string $specialInstructions): self
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
    public function getLocationAttributeTypes(): array
    {
        return $this->locationAttributeTypes;
    }

    /**
     * Specifies the location attribute type list.
     *
     * @param list<string> $locationAttributeTypes
     */
    public function setLocationAttributeTypes(array $locationAttributeTypes): self
    {
        $this->initialized['locationAttributeTypes'] = true;
        $this->locationAttributeTypes = $locationAttributeTypes;

        return $this;
    }

    /**
     * Specifies the map URL.
     */
    public function getMapURL(): string
    {
        return $this->mapURL;
    }

    /**
     * Specifies the map URL.
     */
    public function setMapURL(string $mapURL): self
    {
        $this->initialized['mapURL'] = true;
        $this->mapURL = $mapURL;

        return $this;
    }

    /**
     * Specifies the location type.
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }

    /**
     * Specifies the location type.
     */
    public function setLocationType(string $locationType): self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Specify the contact and address details of a location.
     */
    public function getContactAndAddress(): RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcontactAndAddress
    {
        return $this->contactAndAddress;
    }

    /**
     * Specify the contact and address details of a location.
     */
    public function setContactAndAddress(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcontactAndAddress $contactAndAddress): self
    {
        $this->initialized['contactAndAddress'] = true;
        $this->contactAndAddress = $contactAndAddress;

        return $this;
    }

    /**
     * Specifies the carrierDetails.
     *
     * @return list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem>
     */
    public function getCarrierDetails(): array
    {
        return $this->carrierDetails;
    }

    /**
     * Specifies the carrierDetails.
     *
     * @param list<RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem> $carrierDetails
     */
    public function setCarrierDetails(array $carrierDetails): self
    {
        $this->initialized['carrierDetails'] = true;
        $this->carrierDetails = $carrierDetails;

        return $this;
    }
}
