<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPayment extends \ArrayObject
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
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor
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
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor
     */
    public function getPayor() : ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor $payor) : self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
}