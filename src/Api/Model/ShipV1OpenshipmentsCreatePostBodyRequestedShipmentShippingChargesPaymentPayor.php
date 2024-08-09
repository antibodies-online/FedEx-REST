<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty): self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}