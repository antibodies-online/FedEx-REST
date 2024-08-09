<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostResponse200Output extends \ArrayObject
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
     * Tracking number information which uniquely identifies a package. Tracking number information includes tracking number, carrier code and a unique qualifier.
     *
     * @var TrackV1NotificationsPostResponse200OutputTrackingNumberInfo
     */
    protected $trackingNumberInfo;
    /**
     * Address where the package was actually delivered. Contrast with destination Address, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a neighbor, hold at FedEx location, etc.
     *
     * @var TrackV1NotificationsPostResponse200OutputDestinationAddress
     */
    protected $destinationAddress;
    /**
     * Details of the recipient notification events. Possible events are - ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @var list<list<string>>
     */
    protected $recipientDetails;
    /**
     * The cxs shipment alerts. This includes the alert type, code, and            message.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1NotificationsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Tracking number information which uniquely identifies a package. Tracking number information includes tracking number, carrier code and a unique qualifier.
     *
     * @return TrackV1NotificationsPostResponse200OutputTrackingNumberInfo
     */
    public function getTrackingNumberInfo(): TrackV1NotificationsPostResponse200OutputTrackingNumberInfo
    {
        return $this->trackingNumberInfo;
    }
    /**
     * Tracking number information which uniquely identifies a package. Tracking number information includes tracking number, carrier code and a unique qualifier.
     *
     * @param TrackV1NotificationsPostResponse200OutputTrackingNumberInfo $trackingNumberInfo
     *
     * @return self
     */
    public function setTrackingNumberInfo(TrackV1NotificationsPostResponse200OutputTrackingNumberInfo $trackingNumberInfo): self
    {
        $this->initialized['trackingNumberInfo'] = true;
        $this->trackingNumberInfo = $trackingNumberInfo;
        return $this;
    }
    /**
     * Address where the package was actually delivered. Contrast with destination Address, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a neighbor, hold at FedEx location, etc.
     *
     * @return TrackV1NotificationsPostResponse200OutputDestinationAddress
     */
    public function getDestinationAddress(): TrackV1NotificationsPostResponse200OutputDestinationAddress
    {
        return $this->destinationAddress;
    }
    /**
     * Address where the package was actually delivered. Contrast with destination Address, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a neighbor, hold at FedEx location, etc.
     *
     * @param TrackV1NotificationsPostResponse200OutputDestinationAddress $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(TrackV1NotificationsPostResponse200OutputDestinationAddress $destinationAddress): self
    {
        $this->initialized['destinationAddress'] = true;
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Details of the recipient notification events. Possible events are - ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @return list<list<string>>
     */
    public function getRecipientDetails(): array
    {
        return $this->recipientDetails;
    }
    /**
     * Details of the recipient notification events. Possible events are - ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @param list<list<string>> $recipientDetails
     *
     * @return self
     */
    public function setRecipientDetails(array $recipientDetails): self
    {
        $this->initialized['recipientDetails'] = true;
        $this->recipientDetails = $recipientDetails;
        return $this;
    }
    /**
     * The cxs shipment alerts. This includes the alert type, code, and            message.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1NotificationsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The cxs shipment alerts. This includes the alert type, code, and            message.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1NotificationsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}