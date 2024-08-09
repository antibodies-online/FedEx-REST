<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPayment extends \ArrayObject
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
     * This is payer Information responsible for paying for the shipment.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor
     */
    protected $payor;
    /**
     * Indicate the payment Type.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * This is payer Information responsible for paying for the shipment.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor
     */
    public function getPayor(): RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor
    {
        return $this->payor;
    }
    /**
     * This is payer Information responsible for paying for the shipment.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor $payor
     *
     * @return self
     */
    public function setPayor(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentShippingChargesPaymentpayor $payor): self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
    /**
     * Indicate the payment Type.
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * Indicate the payment Type.
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