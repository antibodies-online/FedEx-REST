<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPayment extends \ArrayObject
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
     * Information about the person who is paying for the shipment. Not applicable for credit card payment. 
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor
     */
    protected $payor;
    /**
     * These are billing details.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails
     */
    protected $billingDetails;
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Information about the person who is paying for the shipment. Not applicable for credit card payment. 
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor
     */
    public function getPayor(): ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Information about the person who is paying for the shipment. Not applicable for credit card payment. 
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor $payor): self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
    /**
     * These are billing details.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails
     */
    public function getBillingDetails(): ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails
    {
        return $this->billingDetails;
    }
    /**
     * These are billing details.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails $billingDetails
     *
     * @return self
     */
    public function setBillingDetails(ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentBillingDetails $billingDetails): self
    {
        $this->initialized['billingDetails'] = true;
        $this->billingDetails = $billingDetails;
        return $this;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
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