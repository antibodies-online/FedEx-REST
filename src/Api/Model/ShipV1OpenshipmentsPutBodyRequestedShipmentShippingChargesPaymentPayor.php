<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1OpenshipmentsPutBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}