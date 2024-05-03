<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocation extends \ArrayObject
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
     * Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     *
     * @var string
     */
    protected $locationId;
    /**
     * Location Contact And Address.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress
     */
    protected $locationContactAndAddress;
    /**
     * This field holds FedEx Location Type. If  Location Type not available we will get empty value.
     *
     * @var string
     */
    protected $locationType;
    /**
     * Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
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
     * Location Contact And Address.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress
     */
    public function getLocationContactAndAddress() : TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress
    {
        return $this->locationContactAndAddress;
    }
    /**
     * Location Contact And Address.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress $locationContactAndAddress
     *
     * @return self
     */
    public function setLocationContactAndAddress(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDestinationLocationlocationContactAndAddress $locationContactAndAddress) : self
    {
        $this->initialized['locationContactAndAddress'] = true;
        $this->locationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * This field holds FedEx Location Type. If  Location Type not available we will get empty value.
     *
     * @return string
     */
    public function getLocationType() : string
    {
        return $this->locationType;
    }
    /**
     * This field holds FedEx Location Type. If  Location Type not available we will get empty value.
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
}