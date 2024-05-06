<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem extends \ArrayObject
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
     * Identifies the email address associated with this contact.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Specifies notification event type.
     *
     * @var list<string>
     */
    protected $notificationEventType;
    /**
     * Specifies the SMS notification details.<br>Conditionally required for SMS notifications.
     *
     * @var mixed
     */
    protected $smsDetail;
    /**
     * Specifies Notification Format Type.
     *
     * @var string
     */
    protected $notificationFormatType;
    /**
     * Required Email Notification Recipient Type.
     *
     * @var string
     */
    protected $emailNotificationRecipientType;
    /**
     * Specifies the type of the notification received.
     *
     * @var string
     */
    protected $notificationType;
    /**
     * Specify the locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>Click here to see the list of available locales<br></a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @var string
     */
    protected $locale;
    /**
     * Identifies the email address associated with this contact.
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * Identifies the email address associated with this contact.
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
     * Specifies notification event type.
     *
     * @return list<string>
     */
    public function getNotificationEventType() : array
    {
        return $this->notificationEventType;
    }
    /**
     * Specifies notification event type.
     *
     * @param list<string> $notificationEventType
     *
     * @return self
     */
    public function setNotificationEventType(array $notificationEventType) : self
    {
        $this->initialized['notificationEventType'] = true;
        $this->notificationEventType = $notificationEventType;
        return $this;
    }
    /**
     * Specifies the SMS notification details.<br>Conditionally required for SMS notifications.
     *
     * @return mixed
     */
    public function getSmsDetail()
    {
        return $this->smsDetail;
    }
    /**
     * Specifies the SMS notification details.<br>Conditionally required for SMS notifications.
     *
     * @param mixed $smsDetail
     *
     * @return self
     */
    public function setSmsDetail($smsDetail) : self
    {
        $this->initialized['smsDetail'] = true;
        $this->smsDetail = $smsDetail;
        return $this;
    }
    /**
     * Specifies Notification Format Type.
     *
     * @return string
     */
    public function getNotificationFormatType() : string
    {
        return $this->notificationFormatType;
    }
    /**
     * Specifies Notification Format Type.
     *
     * @param string $notificationFormatType
     *
     * @return self
     */
    public function setNotificationFormatType(string $notificationFormatType) : self
    {
        $this->initialized['notificationFormatType'] = true;
        $this->notificationFormatType = $notificationFormatType;
        return $this;
    }
    /**
     * Required Email Notification Recipient Type.
     *
     * @return string
     */
    public function getEmailNotificationRecipientType() : string
    {
        return $this->emailNotificationRecipientType;
    }
    /**
     * Required Email Notification Recipient Type.
     *
     * @param string $emailNotificationRecipientType
     *
     * @return self
     */
    public function setEmailNotificationRecipientType(string $emailNotificationRecipientType) : self
    {
        $this->initialized['emailNotificationRecipientType'] = true;
        $this->emailNotificationRecipientType = $emailNotificationRecipientType;
        return $this;
    }
    /**
     * Specifies the type of the notification received.
     *
     * @return string
     */
    public function getNotificationType() : string
    {
        return $this->notificationType;
    }
    /**
     * Specifies the type of the notification received.
     *
     * @param string $notificationType
     *
     * @return self
     */
    public function setNotificationType(string $notificationType) : self
    {
        $this->initialized['notificationType'] = true;
        $this->notificationType = $notificationType;
        return $this;
    }
    /**
     * Specify the locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>Click here to see the list of available locales<br></a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Specify the locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>Click here to see the list of available locales<br></a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}