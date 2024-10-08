<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentEmailNotificationDetail extends \ArrayObject
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
     * This is the shipment Notification Aggregation Type.
     *
     * @var string
     */
    protected $aggregationType;
    /**
     * These are email notification recipient details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentEmailNotificationDetailEmailNotificationRecipientsItem>
     */
    protected $emailNotificationRecipients;
    /**
     * This is your personal message for the email.<br>Note: The maximum personal message character limit depends on the element notificationFormatType values:<ul><li>If notificationFormatType is TEXT, then only 120 characters printed on the email</li><li>If notificationFormatType is HTML, then 500 characters printed on the email</li></ul><br>Example: This is concerning the order 123456 of 26 July 2021 - art no 34324-23 Teddy Bear, brown
     *
     * @var string
     */
    protected $personalMessage;
    /**
     * This is the shipment Notification Aggregation Type.
     *
     * @return string
     */
    public function getAggregationType(): string
    {
        return $this->aggregationType;
    }
    /**
     * This is the shipment Notification Aggregation Type.
     *
     * @param string $aggregationType
     *
     * @return self
     */
    public function setAggregationType(string $aggregationType): self
    {
        $this->initialized['aggregationType'] = true;
        $this->aggregationType = $aggregationType;
        return $this;
    }
    /**
     * These are email notification recipient details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentEmailNotificationDetailEmailNotificationRecipientsItem>
     */
    public function getEmailNotificationRecipients(): array
    {
        return $this->emailNotificationRecipients;
    }
    /**
     * These are email notification recipient details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentEmailNotificationDetailEmailNotificationRecipientsItem> $emailNotificationRecipients
     *
     * @return self
     */
    public function setEmailNotificationRecipients(array $emailNotificationRecipients): self
    {
        $this->initialized['emailNotificationRecipients'] = true;
        $this->emailNotificationRecipients = $emailNotificationRecipients;
        return $this;
    }
    /**
     * This is your personal message for the email.<br>Note: The maximum personal message character limit depends on the element notificationFormatType values:<ul><li>If notificationFormatType is TEXT, then only 120 characters printed on the email</li><li>If notificationFormatType is HTML, then 500 characters printed on the email</li></ul><br>Example: This is concerning the order 123456 of 26 July 2021 - art no 34324-23 Teddy Bear, brown
     *
     * @return string
     */
    public function getPersonalMessage(): string
    {
        return $this->personalMessage;
    }
    /**
     * This is your personal message for the email.<br>Note: The maximum personal message character limit depends on the element notificationFormatType values:<ul><li>If notificationFormatType is TEXT, then only 120 characters printed on the email</li><li>If notificationFormatType is HTML, then 500 characters printed on the email</li></ul><br>Example: This is concerning the order 123456 of 26 July 2021 - art no 34324-23 Teddy Bear, brown
     *
     * @param string $personalMessage
     *
     * @return self
     */
    public function setPersonalMessage(string $personalMessage): self
    {
        $this->initialized['personalMessage'] = true;
        $this->personalMessage = $personalMessage;
        return $this;
    }
}