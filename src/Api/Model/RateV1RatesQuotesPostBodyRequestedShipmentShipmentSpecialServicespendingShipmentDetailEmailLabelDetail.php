<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail extends \ArrayObject
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
     * Describes specific information about the list of email label shipment reipients.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItem>
     */
    protected $recipients;
    /**
     * customer specified message to be included in the email to the end-user.
     *
     * @var string
     */
    protected $message;
    /**
     * Describes specific information about the list of email label shipment reipients.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItem>
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * Describes specific information about the list of email label shipment reipients.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetailRecipientsItem> $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients) : self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * customer specified message to be included in the email to the end-user.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * customer specified message to be included in the email to the end-user.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}