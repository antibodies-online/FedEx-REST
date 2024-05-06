<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfo extends \ArrayObject
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
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-03-29
     *
     * @var string
     */
    protected $shipDateBegin;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-04-01
     *
     * @var string
     */
    protected $shipDateEnd;
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @var TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfotrackingNumberInfo
     */
    protected $trackingNumberInfo;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-03-29
     *
     * @return string
     */
    public function getShipDateBegin() : string
    {
        return $this->shipDateBegin;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-03-29
     *
     * @param string $shipDateBegin
     *
     * @return self
     */
    public function setShipDateBegin(string $shipDateBegin) : self
    {
        $this->initialized['shipDateBegin'] = true;
        $this->shipDateBegin = $shipDateBegin;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-04-01
     *
     * @return string
     */
    public function getShipDateEnd() : string
    {
        return $this->shipDateEnd;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-04-01
     *
     * @param string $shipDateEnd
     *
     * @return self
     */
    public function setShipDateEnd(string $shipDateEnd) : self
    {
        $this->initialized['shipDateEnd'] = true;
        $this->shipDateEnd = $shipDateEnd;
        return $this;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @return TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfotrackingNumberInfo
     */
    public function getTrackingNumberInfo() : TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfotrackingNumberInfo
    {
        return $this->trackingNumberInfo;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @param TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfotrackingNumberInfo $trackingNumberInfo
     *
     * @return self
     */
    public function setTrackingNumberInfo(TrackV1AssociatedshipmentsPostBodyMasterTrackingNumberInfotrackingNumberInfo $trackingNumberInfo) : self
    {
        $this->initialized['trackingNumberInfo'] = true;
        $this->trackingNumberInfo = $trackingNumberInfo;
        return $this;
    }
}