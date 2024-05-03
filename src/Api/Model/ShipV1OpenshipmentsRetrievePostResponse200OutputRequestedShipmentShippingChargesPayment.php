<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment extends \ArrayObject
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
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor
     */
    protected $payor;
    /**
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     *
     * @return string
     */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }
    /**
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType) : self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor
     */
    public function getPayor() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPaymentPayor $payor) : self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
}