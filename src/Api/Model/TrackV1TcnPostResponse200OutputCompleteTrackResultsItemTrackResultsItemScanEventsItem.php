<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItem extends \ArrayObject
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
     * Date and time of the scan event.<br> Example: '2018-02-02T12:01:00-07:00'
     *
     * @var string
     */
    protected $date;
    /**
     * Field which holds status description of the track information for the scan event.<br> Example: 'Picked Up'
     *
     * @var string
     */
    protected $derivedStatus;
    /**
     * Location Details for the FedEx facility where the scan event occurred.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation
     */
    protected $scanLocation;
    /**
     * Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     *
     * @var string
     */
    protected $locationId;
    /**
     * This field holds Location Type. If  Location Type not available we will get empty value
     *
     * @var string
     */
    protected $locationType;
    /**
     * Field which holds the text description for the exception if the event was an exception .<br>Example: Package available for clearance
     *
     * @var string
     */
    protected $exceptionDescription;
    /**
     * Field which holds the text description of the scan event.<br> Example: 'Picked Up'
     *
     * @var string
     */
    protected $eventDescription;
    /**
     * Field which holds the code identifying the type of scan event.<br> Example: 'PU'
     *
     * @var string
     */
    protected $eventType;
    /**
     * Field which holds status code of the track information for the scan event.<br> Example: 'PU'
     *
     * @var string
     */
    protected $derivedStatusCode;
    /**
     * Field which holds the code identifier for the exception if the event was an exception. <br> Example: A25
     *
     * @var string
     */
    protected $exceptionCode;
    /**
     * Specifies the information about delays.
     *
     * @var TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail
     */
    protected $delayDetail;
    /**
     * Date and time of the scan event.<br> Example: '2018-02-02T12:01:00-07:00'
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * Date and time of the scan event.<br> Example: '2018-02-02T12:01:00-07:00'
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Field which holds status description of the track information for the scan event.<br> Example: 'Picked Up'
     *
     * @return string
     */
    public function getDerivedStatus(): string
    {
        return $this->derivedStatus;
    }
    /**
     * Field which holds status description of the track information for the scan event.<br> Example: 'Picked Up'
     *
     * @param string $derivedStatus
     *
     * @return self
     */
    public function setDerivedStatus(string $derivedStatus): self
    {
        $this->initialized['derivedStatus'] = true;
        $this->derivedStatus = $derivedStatus;
        return $this;
    }
    /**
     * Location Details for the FedEx facility where the scan event occurred.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation
     */
    public function getScanLocation(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation
    {
        return $this->scanLocation;
    }
    /**
     * Location Details for the FedEx facility where the scan event occurred.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation $scanLocation
     *
     * @return self
     */
    public function setScanLocation(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemScanLocation $scanLocation): self
    {
        $this->initialized['scanLocation'] = true;
        $this->scanLocation = $scanLocation;
        return $this;
    }
    /**
     * Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     *
     * @return string
     */
    public function getLocationId(): string
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
    public function setLocationId(string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * This field holds Location Type. If  Location Type not available we will get empty value
     *
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }
    /**
     * This field holds Location Type. If  Location Type not available we will get empty value
     *
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType): self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;
        return $this;
    }
    /**
     * Field which holds the text description for the exception if the event was an exception .<br>Example: Package available for clearance
     *
     * @return string
     */
    public function getExceptionDescription(): string
    {
        return $this->exceptionDescription;
    }
    /**
     * Field which holds the text description for the exception if the event was an exception .<br>Example: Package available for clearance
     *
     * @param string $exceptionDescription
     *
     * @return self
     */
    public function setExceptionDescription(string $exceptionDescription): self
    {
        $this->initialized['exceptionDescription'] = true;
        $this->exceptionDescription = $exceptionDescription;
        return $this;
    }
    /**
     * Field which holds the text description of the scan event.<br> Example: 'Picked Up'
     *
     * @return string
     */
    public function getEventDescription(): string
    {
        return $this->eventDescription;
    }
    /**
     * Field which holds the text description of the scan event.<br> Example: 'Picked Up'
     *
     * @param string $eventDescription
     *
     * @return self
     */
    public function setEventDescription(string $eventDescription): self
    {
        $this->initialized['eventDescription'] = true;
        $this->eventDescription = $eventDescription;
        return $this;
    }
    /**
     * Field which holds the code identifying the type of scan event.<br> Example: 'PU'
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * Field which holds the code identifying the type of scan event.<br> Example: 'PU'
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * Field which holds status code of the track information for the scan event.<br> Example: 'PU'
     *
     * @return string
     */
    public function getDerivedStatusCode(): string
    {
        return $this->derivedStatusCode;
    }
    /**
     * Field which holds status code of the track information for the scan event.<br> Example: 'PU'
     *
     * @param string $derivedStatusCode
     *
     * @return self
     */
    public function setDerivedStatusCode(string $derivedStatusCode): self
    {
        $this->initialized['derivedStatusCode'] = true;
        $this->derivedStatusCode = $derivedStatusCode;
        return $this;
    }
    /**
     * Field which holds the code identifier for the exception if the event was an exception. <br> Example: A25
     *
     * @return string
     */
    public function getExceptionCode(): string
    {
        return $this->exceptionCode;
    }
    /**
     * Field which holds the code identifier for the exception if the event was an exception. <br> Example: A25
     *
     * @param string $exceptionCode
     *
     * @return self
     */
    public function setExceptionCode(string $exceptionCode): self
    {
        $this->initialized['exceptionCode'] = true;
        $this->exceptionCode = $exceptionCode;
        return $this;
    }
    /**
     * Specifies the information about delays.
     *
     * @return TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail
     */
    public function getDelayDetail(): TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail
    {
        return $this->delayDetail;
    }
    /**
     * Specifies the information about delays.
     *
     * @param TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail $delayDetail
     *
     * @return self
     */
    public function setDelayDetail(TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemScanEventsItemDelayDetail $delayDetail): self
    {
        $this->initialized['delayDetail'] = true;
        $this->delayDetail = $delayDetail;
        return $this;
    }
}