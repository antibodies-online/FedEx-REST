<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentEmailNotificationDetailEmailNotificationRecipientsItem extends \ArrayObject
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
     * Specify the recipient name.<br>Example: Joe Smith
     *
     * @var string
     */
    protected $name;
    /**
     * Specify the recipient type for email notification.
     *
     * @var string
     */
    protected $emailNotificationRecipientType;
    /**
     * Specify the recipient email address.<br>Example: xyz@aol.com
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * This is the format for the email notification. Either HTML or plain text can be provided.
     *
     * @var string
     */
    protected $notificationFormatType;
    /**
     * Indicate the type of notification that will be sent as an email.
     *
     * @var string
     */
    protected $notificationType;
    /**
     * These are the locale details for email.<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $locale;
    /**
     * Specify notification event types.<br><a onclick='loadDocReference("notificationeventtypes")'>Click here for more information on Notification Event Types.</a>
     *
     * @var list<string>
     */
    protected $notificationEventType;
    /**
     * Specify the recipient name.<br>Example: Joe Smith
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Specify the recipient name.<br>Example: Joe Smith
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specify the recipient type for email notification.
     *
     * @return string
     */
    public function getEmailNotificationRecipientType(): string
    {
        return $this->emailNotificationRecipientType;
    }
    /**
     * Specify the recipient type for email notification.
     *
     * @param string $emailNotificationRecipientType
     *
     * @return self
     */
    public function setEmailNotificationRecipientType(string $emailNotificationRecipientType): self
    {
        $this->initialized['emailNotificationRecipientType'] = true;
        $this->emailNotificationRecipientType = $emailNotificationRecipientType;
        return $this;
    }
    /**
     * Specify the recipient email address.<br>Example: xyz@aol.com
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * Specify the recipient email address.<br>Example: xyz@aol.com
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * This is the format for the email notification. Either HTML or plain text can be provided.
     *
     * @return string
     */
    public function getNotificationFormatType(): string
    {
        return $this->notificationFormatType;
    }
    /**
     * This is the format for the email notification. Either HTML or plain text can be provided.
     *
     * @param string $notificationFormatType
     *
     * @return self
     */
    public function setNotificationFormatType(string $notificationFormatType): self
    {
        $this->initialized['notificationFormatType'] = true;
        $this->notificationFormatType = $notificationFormatType;
        return $this;
    }
    /**
     * Indicate the type of notification that will be sent as an email.
     *
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
    /**
     * Indicate the type of notification that will be sent as an email.
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
    /**
     * These are the locale details for email.<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * These are the locale details for email.<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Specify notification event types.<br><a onclick='loadDocReference("notificationeventtypes")'>Click here for more information on Notification Event Types.</a>
     *
     * @return list<string>
     */
    public function getNotificationEventType(): array
    {
        return $this->notificationEventType;
    }
    /**
     * Specify notification event types.<br><a onclick='loadDocReference("notificationeventtypes")'>Click here for more information on Notification Event Types.</a>
     *
     * @param list<string> $notificationEventType
     *
     * @return self
     */
    public function setNotificationEventType(array $notificationEventType): self
    {
        $this->initialized['notificationEventType'] = true;
        $this->notificationEventType = $notificationEventType;
        return $this;
    }
}