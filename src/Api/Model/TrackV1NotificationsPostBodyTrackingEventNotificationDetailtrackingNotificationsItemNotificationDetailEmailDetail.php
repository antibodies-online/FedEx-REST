<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailEmailDetail extends \ArrayObject
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
     * Specifies email address on which user wants to get notified for various registered events.<br>Example: p1@fedex.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specifies the name of the notification recipient.<br>Example: Sam Smith
     *
     * @var string
     */
    protected $name;
    /**
     * Specifies email address on which user wants to get notified for various registered events.<br>Example: p1@fedex.com
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Specifies email address on which user wants to get notified for various registered events.<br>Example: p1@fedex.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Specifies the name of the notification recipient.<br>Example: Sam Smith
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Specifies the name of the notification recipient.<br>Example: Sam Smith
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}