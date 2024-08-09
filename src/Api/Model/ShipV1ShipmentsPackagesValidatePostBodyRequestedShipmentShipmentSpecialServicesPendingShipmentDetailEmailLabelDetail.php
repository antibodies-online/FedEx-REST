<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail extends \ArrayObject
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
     * This is Email label recipient email address, shipment role, & language locale details. Atleast one entry must be specified.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItem>
     */
    protected $recipients;
    /**
     * This is an optional personalized message to be included in the email to the recipient.
     *
     * @var string
     */
    protected $message;
    /**
     * This is Email label recipient email address, shipment role, & language locale details. Atleast one entry must be specified.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItem>
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }
    /**
     * This is Email label recipient email address, shipment role, & language locale details. Atleast one entry must be specified.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetailRecipientsItem> $recipients
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
     * This is an optional personalized message to be included in the email to the recipient.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * This is an optional personalized message to be included in the email to the recipient.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}