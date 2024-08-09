<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem extends \ArrayObject
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
     * Information about the notification email and the language of the notification requested.
     *
     * @var TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail
     */
    protected $notificationDetail;
    /**
     * This is to specify Recipient_Role in the shipment. <br>Possible values - BROKER, OTHER, RECIPIENT, SHIPPER <br> Example: SHIPPER
     *
     * @var string
     */
    protected $role;
    /**
     * Identifies the events for which the client is requesting notifications. <br>Possible Values are: ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER
     *
     * @var list<string>
     */
    protected $notificationEventTypes;
    /**
     * If value is 'true' the current tracking results for the shipment along with notification details will be provided to the client. If 'false' only results for the notification request is provided.<br>Defaults to 'false'<br>Example: true
     *
     * @var bool
     */
    protected $currentResultRequestedFlag;
    /**
     * Information about the notification email and the language of the notification requested.
     *
     * @return TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail
     */
    public function getNotificationDetail(): TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail
    {
        return $this->notificationDetail;
    }
    /**
     * Information about the notification email and the language of the notification requested.
     *
     * @param TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail $notificationDetail
     *
     * @return self
     */
    public function setNotificationDetail(TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail $notificationDetail): self
    {
        $this->initialized['notificationDetail'] = true;
        $this->notificationDetail = $notificationDetail;
        return $this;
    }
    /**
     * This is to specify Recipient_Role in the shipment. <br>Possible values - BROKER, OTHER, RECIPIENT, SHIPPER <br> Example: SHIPPER
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * This is to specify Recipient_Role in the shipment. <br>Possible values - BROKER, OTHER, RECIPIENT, SHIPPER <br> Example: SHIPPER
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Identifies the events for which the client is requesting notifications. <br>Possible Values are: ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER
     *
     * @return list<string>
     */
    public function getNotificationEventTypes(): array
    {
        return $this->notificationEventTypes;
    }
    /**
     * Identifies the events for which the client is requesting notifications. <br>Possible Values are: ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER
     *
     * @param list<string> $notificationEventTypes
     *
     * @return self
     */
    public function setNotificationEventTypes(array $notificationEventTypes): self
    {
        $this->initialized['notificationEventTypes'] = true;
        $this->notificationEventTypes = $notificationEventTypes;
        return $this;
    }
    /**
     * If value is 'true' the current tracking results for the shipment along with notification details will be provided to the client. If 'false' only results for the notification request is provided.<br>Defaults to 'false'<br>Example: true
     *
     * @return bool
     */
    public function getCurrentResultRequestedFlag(): bool
    {
        return $this->currentResultRequestedFlag;
    }
    /**
     * If value is 'true' the current tracking results for the shipment along with notification details will be provided to the client. If 'false' only results for the notification request is provided.<br>Defaults to 'false'<br>Example: true
     *
     * @param bool $currentResultRequestedFlag
     *
     * @return self
     */
    public function setCurrentResultRequestedFlag(bool $currentResultRequestedFlag): self
    {
        $this->initialized['currentResultRequestedFlag'] = true;
        $this->currentResultRequestedFlag = $currentResultRequestedFlag;
        return $this;
    }
}