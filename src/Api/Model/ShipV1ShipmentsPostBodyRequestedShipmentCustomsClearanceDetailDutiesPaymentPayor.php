<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor extends \ArrayObject
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
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty(): ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty): self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}