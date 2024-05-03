<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemFreightTransitLocationDetailItemOriginLocationgeoPositionalCoordinates extends \ArrayObject
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
     * Specifies the latitude.
     *
     * @var float
     */
    protected $latitude;
    /**
     * Specifies the longitude.
     *
     * @var float
     */
    protected $longitude;
    /**
     * Specifies the latitude.
     *
     * @return float
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
    /**
     * Specifies the latitude.
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
     * Specifies the longitude.
     *
     * @return float
     */
    public function getLongitude() : float
    {
        return $this->longitude;
    }
    /**
     * Specifies the longitude.
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