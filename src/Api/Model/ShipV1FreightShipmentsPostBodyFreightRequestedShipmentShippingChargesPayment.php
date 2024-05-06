<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment extends \ArrayObject
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
    * Indicates who and how the shipment will be paid for.
    Required for Express and Ground.
    *
    * @var string
    */
    protected $paymentType;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Optional when paymentType is SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayor
     */
    protected $payor;
    /**
    * Indicates who and how the shipment will be paid for.
    Required for Express and Ground.
    *
    * @return string
    */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }
    /**
    * Indicates who and how the shipment will be paid for.
    Required for Express and Ground.
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
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Optional when paymentType is SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayor
     */
    public function getPayor() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Optional when paymentType is SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayor $payor) : self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
}