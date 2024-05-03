<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItem extends \ArrayObject
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
     * Freight total distance between origin and destination city centers.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance
     */
    protected $distance;
    /**
     * Specifies the Freight destination city center information.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation
     */
    protected $destinationLocation;
    /**
     * Freight origin city center information.
     *
     * @var RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation
     */
    protected $originLocation;
    /**
     * Freight total distance between origin and destination city centers.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance
     */
    public function getDistance() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance
    {
        return $this->distance;
    }
    /**
     * Freight total distance between origin and destination city centers.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance $distance
     *
     * @return self
     */
    public function setDistance(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * Specifies the Freight destination city center information.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation
     */
    public function getDestinationLocation() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation
    {
        return $this->destinationLocation;
    }
    /**
     * Specifies the Freight destination city center information.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemDestinationLocation $destinationLocation) : self
    {
        $this->initialized['destinationLocation'] = true;
        $this->destinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Freight origin city center information.
     *
     * @return RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation
     */
    public function getOriginLocation() : RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation
    {
        return $this->originLocation;
    }
    /**
     * Freight origin city center information.
     *
     * @param RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocation $originLocation) : self
    {
        $this->initialized['originLocation'] = true;
        $this->originLocation = $originLocation;
        return $this;
    }
}