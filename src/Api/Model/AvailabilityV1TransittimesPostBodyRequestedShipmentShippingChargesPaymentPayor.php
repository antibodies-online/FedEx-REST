<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * Conditional. The descriptive data for the payor of the shipment and their physical address, contact and account number information.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Conditional. The descriptive data for the payor of the shipment and their physical address, contact and account number information.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty(): AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Conditional. The descriptive data for the payor of the shipment and their physical address, contact and account number information.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty): self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}