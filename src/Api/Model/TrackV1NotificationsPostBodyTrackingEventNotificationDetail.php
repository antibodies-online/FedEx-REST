<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBodyTrackingEventNotificationDetail extends \ArrayObject
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
     * List of Tracking notifications requested for events like ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @var list<TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem>
     */
    protected $trackingNotifications;
    /**
     * An optional message which will be included in the body of the email.
     *
     * @var string
     */
    protected $personalMessage;
    /**
     * If value is 'true' then html tags are included in the response date.  If 'false' they are not provided in the response.
     *
     * @var mixed
     */
    protected $supportHTML;
    /**
     * List of Tracking notifications requested for events like ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @return list<TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem>
     */
    public function getTrackingNotifications() : array
    {
        return $this->trackingNotifications;
    }
    /**
     * List of Tracking notifications requested for events like ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     *
     * @param list<TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItem> $trackingNotifications
     *
     * @return self
     */
    public function setTrackingNotifications(array $trackingNotifications) : self
    {
        $this->initialized['trackingNotifications'] = true;
        $this->trackingNotifications = $trackingNotifications;
        return $this;
    }
    /**
     * An optional message which will be included in the body of the email.
     *
     * @return string
     */
    public function getPersonalMessage() : string
    {
        return $this->personalMessage;
    }
    /**
     * An optional message which will be included in the body of the email.
     *
     * @param string $personalMessage
     *
     * @return self
     */
    public function setPersonalMessage(string $personalMessage) : self
    {
        $this->initialized['personalMessage'] = true;
        $this->personalMessage = $personalMessage;
        return $this;
    }
    /**
     * If value is 'true' then html tags are included in the response date.  If 'false' they are not provided in the response.
     *
     * @return mixed
     */
    public function getSupportHTML()
    {
        return $this->supportHTML;
    }
    /**
     * If value is 'true' then html tags are included in the response date.  If 'false' they are not provided in the response.
     *
     * @param mixed $supportHTML
     *
     * @return self
     */
    public function setSupportHTML($supportHTML) : self
    {
        $this->initialized['supportHTML'] = true;
        $this->supportHTML = $supportHTML;
        return $this;
    }
}