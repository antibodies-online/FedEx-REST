<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBody extends \ArrayObject
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
     * Placeholder for Sender contact name.<br> Example: Sam Smith
     *
     * @var string
     */
    protected $senderContactName;
    /**
     * Email address of the sender from which the shipment notification will be sent.<br>Example: LSR123@gmail.com
     *
     * @var string
     */
    protected $senderEMailAddress;
    /**
     * Object for holding tracking event Notification details.
     *
     * @var TrackV1NotificationsPostBodyTrackingEventNotificationDetail
     */
    protected $trackingEventNotificationDetail;
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @var TrackV1NotificationsPostBodyTrackingNumberInfo
     */
    protected $trackingNumberInfo;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @var string
     */
    protected $shipDateBegin;
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @var string
     */
    protected $shipDateEnd;
    /**
     * Placeholder for Sender contact name.<br> Example: Sam Smith
     *
     * @return string
     */
    public function getSenderContactName(): string
    {
        return $this->senderContactName;
    }
    /**
     * Placeholder for Sender contact name.<br> Example: Sam Smith
     *
     * @param string $senderContactName
     *
     * @return self
     */
    public function setSenderContactName(string $senderContactName): self
    {
        $this->initialized['senderContactName'] = true;
        $this->senderContactName = $senderContactName;
        return $this;
    }
    /**
     * Email address of the sender from which the shipment notification will be sent.<br>Example: LSR123@gmail.com
     *
     * @return string
     */
    public function getSenderEMailAddress(): string
    {
        return $this->senderEMailAddress;
    }
    /**
     * Email address of the sender from which the shipment notification will be sent.<br>Example: LSR123@gmail.com
     *
     * @param string $senderEMailAddress
     *
     * @return self
     */
    public function setSenderEMailAddress(string $senderEMailAddress): self
    {
        $this->initialized['senderEMailAddress'] = true;
        $this->senderEMailAddress = $senderEMailAddress;
        return $this;
    }
    /**
     * Object for holding tracking event Notification details.
     *
     * @return TrackV1NotificationsPostBodyTrackingEventNotificationDetail
     */
    public function getTrackingEventNotificationDetail(): TrackV1NotificationsPostBodyTrackingEventNotificationDetail
    {
        return $this->trackingEventNotificationDetail;
    }
    /**
     * Object for holding tracking event Notification details.
     *
     * @param TrackV1NotificationsPostBodyTrackingEventNotificationDetail $trackingEventNotificationDetail
     *
     * @return self
     */
    public function setTrackingEventNotificationDetail(TrackV1NotificationsPostBodyTrackingEventNotificationDetail $trackingEventNotificationDetail): self
    {
        $this->initialized['trackingEventNotificationDetail'] = true;
        $this->trackingEventNotificationDetail = $trackingEventNotificationDetail;
        return $this;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @return TrackV1NotificationsPostBodyTrackingNumberInfo
     */
    public function getTrackingNumberInfo(): TrackV1NotificationsPostBodyTrackingNumberInfo
    {
        return $this->trackingNumberInfo;
    }
    /**
     * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     *
     * @param TrackV1NotificationsPostBodyTrackingNumberInfo $trackingNumberInfo
     *
     * @return self
     */
    public function setTrackingNumberInfo(TrackV1NotificationsPostBodyTrackingNumberInfo $trackingNumberInfo): self
    {
        $this->initialized['trackingNumberInfo'] = true;
        $this->trackingNumberInfo = $trackingNumberInfo;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @return string
     */
    public function getShipDateBegin(): string
    {
        return $this->shipDateBegin;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @param string $shipDateBegin
     *
     * @return self
     */
    public function setShipDateBegin(string $shipDateBegin): self
    {
        $this->initialized['shipDateBegin'] = true;
        $this->shipDateBegin = $shipDateBegin;
        return $this;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @return string
     */
    public function getShipDateEnd(): string
    {
        return $this->shipDateEnd;
    }
    /**
     * ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     *
     * @param string $shipDateEnd
     *
     * @return self
     */
    public function setShipDateEnd(string $shipDateEnd): self
    {
        $this->initialized['shipDateEnd'] = true;
        $this->shipDateEnd = $shipDateEnd;
        return $this;
    }
}