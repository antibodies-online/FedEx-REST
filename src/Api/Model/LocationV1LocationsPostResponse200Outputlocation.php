<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostResponse200Outputlocation extends \ArrayObject
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
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var LocationV1LocationsPostResponse200Outputlocationaddress
     */
    protected $address;
    /**
     * The ISO6709 geographic coordinates for a specific geographic location, specifically latitude and longitude.
     *
     * @var LocationV1LocationsPostResponse200OutputlocationlongLat
     */
    protected $longLat;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return LocationV1LocationsPostResponse200Outputlocationaddress
     */
    public function getAddress(): LocationV1LocationsPostResponse200Outputlocationaddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param LocationV1LocationsPostResponse200Outputlocationaddress $address
     *
     * @return self
     */
    public function setAddress(LocationV1LocationsPostResponse200Outputlocationaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The ISO6709 geographic coordinates for a specific geographic location, specifically latitude and longitude.
     *
     * @return LocationV1LocationsPostResponse200OutputlocationlongLat
     */
    public function getLongLat(): LocationV1LocationsPostResponse200OutputlocationlongLat
    {
        return $this->longLat;
    }
    /**
     * The ISO6709 geographic coordinates for a specific geographic location, specifically latitude and longitude.
     *
     * @param LocationV1LocationsPostResponse200OutputlocationlongLat $longLat
     *
     * @return self
     */
    public function setLongLat(LocationV1LocationsPostResponse200OutputlocationlongLat $longLat): self
    {
        $this->initialized['longLat'] = true;
        $this->longLat = $longLat;
        return $this;
    }
}