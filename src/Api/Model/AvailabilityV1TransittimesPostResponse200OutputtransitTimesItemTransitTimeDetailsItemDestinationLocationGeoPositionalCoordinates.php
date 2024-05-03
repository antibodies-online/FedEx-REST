<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemDestinationLocationGeoPositionalCoordinates extends \ArrayObject
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
     * Field holds the latitude value
     *
     * @var float
     */
    protected $latitude;
    /**
     * Field holds the longitude value
     *
     * @var float
     */
    protected $longitude;
    /**
     * Field holds the latitude value
     *
     * @return float
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
    /**
     * Field holds the latitude value
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude) : self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Field holds the longitude value
     *
     * @return float
     */
    public function getLongitude() : float
    {
        return $this->longitude;
    }
    /**
     * Field holds the longitude value
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude) : self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
}