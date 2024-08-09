<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment extends \ArrayObject
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
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     *
     * @var string
     */
    protected $paymentType;
    /**
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor
     */
    protected $payor;
    /**
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     *
     * @return string
     */
    public function getPaymentType(): string
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
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor
     */
    public function getPayor(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor $payor): self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
}