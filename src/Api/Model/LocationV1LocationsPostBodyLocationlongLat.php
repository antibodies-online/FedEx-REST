<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class LocationV1LocationsPostBodyLocationlongLat extends \ArrayObject
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
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     *
     * @var string
     */
    protected $latitude;
    /**
     * The geo coordinate value that specifies the East-West position of the address.<br>Example:115.1398° W
     *
     * @var string
     */
    protected $longitude;
    /**
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     *
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }
    /**
     * The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * The geo coordinate value that specifies the East-West position of the address.<br>Example:115.1398° W
     *
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }
    /**
     * The geo coordinate value that specifies the East-West position of the address.<br>Example:115.1398° W
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
}