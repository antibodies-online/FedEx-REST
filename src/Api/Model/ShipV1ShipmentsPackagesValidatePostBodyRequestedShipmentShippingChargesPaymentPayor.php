<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayor extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}