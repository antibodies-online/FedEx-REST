<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayor extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    protected $responsibleParty;
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
     */
    public function getResponsibleParty() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty
    {
        return $this->responsibleParty;
    }
    /**
     * Use this object to provide the attributes such as physical address, contact information and account number information.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty
     *
     * @return self
     */
    public function setResponsibleParty(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty $responsibleParty) : self
    {
        $this->initialized['responsibleParty'] = true;
        $this->responsibleParty = $responsibleParty;
        return $this;
    }
}