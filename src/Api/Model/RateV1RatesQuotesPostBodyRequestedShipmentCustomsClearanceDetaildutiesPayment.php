<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPayment extends \ArrayObject
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
     * This is payer Information responsible for paying for the shipment.<br>Note: Optional when paymentType is SENDER.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor
     */
    protected $payor;
    /**
     * Indicate the payment Type. Applicable for Express and Ground rates.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * This is payer Information responsible for paying for the shipment.<br>Note: Optional when paymentType is SENDER.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor
     */
    public function getPayor(): RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * This is payer Information responsible for paying for the shipment.<br>Note: Optional when paymentType is SENDER.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetaildutiesPaymentPayor $payor): self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
    /**
     * Indicate the payment Type. Applicable for Express and Ground rates.
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Indicate the payment Type. Applicable for Express and Ground rates.
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
}