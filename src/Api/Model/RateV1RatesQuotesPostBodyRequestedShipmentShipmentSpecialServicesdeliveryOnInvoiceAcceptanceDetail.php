<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail extends \ArrayObject
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
     * 
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient
     */
    protected $recipient;
    /**
     * 
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient
     */
    public function getRecipient(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient
    {
        return $this->recipient;
    }
    /**
     * 
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetailRecipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
}