<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment extends \ArrayObject
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
     * Information about the person who is paying for the shipment.  Not applicable for credit card payment. 
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor
     */
    protected $payor;
    /**
    * Applicable for Express and Ground rates.<br>
    Indicates who and how the shipment will be paid for.
    *
    * @var string
    */
    protected $paymentType;
    /**
     * Information about the person who is paying for the shipment.  Not applicable for credit card payment. 
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor
     */
    public function getPayor() : AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor
    {
        return $this->payor;
    }
    /**
     * Information about the person who is paying for the shipment.  Not applicable for credit card payment. 
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor $payor
     *
     * @return self
     */
    public function setPayor(AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor $payor) : self
    {
        $this->initialized['payor'] = true;
        $this->payor = $payor;
        return $this;
    }
    /**
    * Applicable for Express and Ground rates.<br>
    Indicates who and how the shipment will be paid for.
    *
    * @return string
    */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }
    /**
    * Applicable for Express and Ground rates.<br>
    Indicates who and how the shipment will be paid for.
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
}