<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200OutputlatestLocationGeoPositionalCoordinates extends \ArrayObject
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
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     *
     * @var float
     */
    protected $latitude;
    /**
     * The geo coordinate value that specifies the East-West position of the address.<br>Example: 115.1398° W
     *
     * @var float
     */
    protected $longitude;
    /**
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     *
     * @return float
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
    /**
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
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
     * The geo coordinate value that specifies the East-West position of the address.<br>Example: 115.1398° W
     *
     * @return float
     */
    public function getLongitude() : float
    {
        return $this->longitude;
    }
    /**
     * The geo coordinate value that specifies the East-West position of the address.<br>Example: 115.1398° W
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