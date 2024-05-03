<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocation extends \ArrayObject
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
     * @var TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress
     */
    protected $locationContactAndAddress;
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
     * @return TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress
     */
    public function getLocationContactAndAddress() : TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress
    {
        return $this->locationContactAndAddress;
    }
    /**
     * Location Contact And Address.
     *
     * @param TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress $locationContactAndAddress
     *
     * @return self
     */
    public function setLocationContactAndAddress(TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemOriginLocationlocationContactAndAddress $locationContactAndAddress) : self
    {
        $this->initialized['locationContactAndAddress'] = true;
        $this->locationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
}