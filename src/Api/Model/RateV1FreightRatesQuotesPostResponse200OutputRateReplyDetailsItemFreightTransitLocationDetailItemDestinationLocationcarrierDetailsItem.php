<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItem extends \ArrayObject
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
     * Specifies the country relationship (domestic and/or  international) among the shipments being picked up.
     *
     * @var string
     */
    protected $countryRelationshipType;
    /**
     * Specifies the type of carrier code.
     *
     * @var string
     */
    protected $carrierCodeType;
    /**
     * Describes the latest dropoff details for the location.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails
     */
    protected $latestDropoffDetails;
    /**
     * Specifies the country relationship (domestic and/or  international) among the shipments being picked up.
     *
     * @return string
     */
    public function getCountryRelationshipType() : string
    {
        return $this->countryRelationshipType;
    }
    /**
     * Specifies the country relationship (domestic and/or  international) among the shipments being picked up.
     *
     * @param string $countryRelationshipType
     *
     * @return self
     */
    public function setCountryRelationshipType(string $countryRelationshipType) : self
    {
        $this->initialized['countryRelationshipType'] = true;
        $this->countryRelationshipType = $countryRelationshipType;
        return $this;
    }
    /**
     * Specifies the type of carrier code.
     *
     * @return string
     */
    public function getCarrierCodeType() : string
    {
        return $this->carrierCodeType;
    }
    /**
     * Specifies the type of carrier code.
     *
     * @param string $carrierCodeType
     *
     * @return self
     */
    public function setCarrierCodeType(string $carrierCodeType) : self
    {
        $this->initialized['carrierCodeType'] = true;
        $this->carrierCodeType = $carrierCodeType;
        return $this;
    }
    /**
     * Describes the latest dropoff details for the location.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails
     */
    public function getLatestDropoffDetails() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails
    {
        return $this->latestDropoffDetails;
    }
    /**
     * Describes the latest dropoff details for the location.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails $latestDropoffDetails
     *
     * @return self
     */
    public function setLatestDropoffDetails(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocationcarrierDetailsItemLatestDropoffDetails $latestDropoffDetails) : self
    {
        $this->initialized['latestDropoffDetails'] = true;
        $this->latestDropoffDetails = $latestDropoffDetails;
        return $this;
    }
}