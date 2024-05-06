<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1ShipmentsPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}