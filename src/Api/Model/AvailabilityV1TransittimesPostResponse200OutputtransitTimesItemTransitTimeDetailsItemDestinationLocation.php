<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocation extends \ArrayObject
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
     * the ISO6709GeographicCoordinates for a specific geographic location
     *
     * @var AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates
     */
    protected $geoPositionalCoordinates;
    /**
     * the ISO6709GeographicCoordinates for a specific geographic location
     *
     * @return AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates
     */
    public function getGeoPositionalCoordinates() : AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates
    {
        return $this->geoPositionalCoordinates;
    }
    /**
     * the ISO6709GeographicCoordinates for a specific geographic location
     *
     * @param AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates $geoPositionalCoordinates
     *
     * @return self
     */
    public function setGeoPositionalCoordinates(AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates $geoPositionalCoordinates) : self
    {
        $this->initialized['geoPositionalCoordinates'] = true;
        $this->geoPositionalCoordinates = $geoPositionalCoordinates;
        return $this;
    }
}