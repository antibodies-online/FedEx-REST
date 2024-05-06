<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor extends \ArrayObject
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
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}