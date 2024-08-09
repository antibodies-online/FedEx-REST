<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail extends \ArrayObject
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
     *  The list of recipients for shipment notifications.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem>
     */
    protected $recipients;
    /**
     * Indicates the personal message to be added with the notification.
     *
     * @var string
     */
    protected $personalMessage;
    /**
     * Specifies Printed Reference.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference
     */
    protected $printedReference;
    /**
     *  The list of recipients for shipment notifications.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem>
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }
    /**
     *  The list of recipients for shipment notifications.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailRecipientsItem> $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients): self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * Indicates the personal message to be added with the notification.
     *
     * @return string
     */
    public function getPersonalMessage(): string
    {
        return $this->personalMessage;
    }
    /**
     * Indicates the personal message to be added with the notification.
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
    /**
     * Specifies Printed Reference.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference
     */
    public function getPrintedReference(): RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference
    {
        return $this->printedReference;
    }
    /**
     * Specifies Printed Reference.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference $printedReference
     *
     * @return self
     */
    public function setPrintedReference(RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetailPrintedReference $printedReference): self
    {
        $this->initialized['printedReference'] = true;
        $this->printedReference = $printedReference;
        return $this;
    }
}