<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetail extends \ArrayObject
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
     * Specifies the language details for email notification.
     *
     * @var TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization
     */
    protected $localization;
    /**
     * Specifies the Email Notification Details.
     *
     * @var TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail
     */
    protected $emailDetail;
    /**
     * Identifies the format of the notification. <br>valid values are 'HTML' or 'TEXT'.
     *
     * @var string
     */
    protected $notificationType;
    /**
     * Specifies the language details for email notification.
     *
     * @return TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization
     */
    public function getLocalization(): TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization
    {
        return $this->localization;
    }
    /**
     * Specifies the language details for email notification.
     *
     * @param TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization $localization
     *
     * @return self
     */
    public function setLocalization(TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization $localization): self
    {
        $this->initialized['localization'] = true;
        $this->localization = $localization;
        return $this;
    }
    /**
     * Specifies the Email Notification Details.
     *
     * @return TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail
     */
    public function getEmailDetail(): TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail
    {
        return $this->emailDetail;
    }
    /**
     * Specifies the Email Notification Details.
     *
     * @param TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail $emailDetail
     *
     * @return self
     */
    public function setEmailDetail(TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail $emailDetail): self
    {
        $this->initialized['emailDetail'] = true;
        $this->emailDetail = $emailDetail;
        return $this;
    }
    /**
     * Identifies the format of the notification. <br>valid values are 'HTML' or 'TEXT'.
     *
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
    /**
     * Identifies the format of the notification. <br>valid values are 'HTML' or 'TEXT'.
     *
     * @param string $notificationType
     *
     * @return self
     */
    public function setNotificationType(string $notificationType): self
    {
        $this->initialized['notificationType'] = true;
        $this->notificationType = $notificationType;
        return $this;
    }
}