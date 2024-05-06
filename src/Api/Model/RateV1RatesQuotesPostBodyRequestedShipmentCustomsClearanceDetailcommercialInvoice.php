<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetailcommercialInvoice extends \ArrayObject
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
     * The reason for the shipment.  Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @var string
     */
    protected $shipmentPurpose;
    /**
     * The reason for the shipment.  Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @return string
     */
    public function getShipmentPurpose() : string
    {
        return $this->shipmentPurpose;
    }
    /**
     * The reason for the shipment.  Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param string $shipmentPurpose
     *
     * @return self
     */
    public function setShipmentPurpose(string $shipmentPurpose) : self
    {
        $this->initialized['shipmentPurpose'] = true;
        $this->shipmentPurpose = $shipmentPurpose;
        return $this;
    }
}