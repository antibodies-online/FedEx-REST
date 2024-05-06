<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail extends \ArrayObject
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
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    protected $usmcaLowValueStatementDetail;
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
    {
        return $this->usmcaLowValueStatementDetail;
    }
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     *
     * @return self
     */
    public function setUsmcaLowValueStatementDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail) : self
    {
        $this->initialized['usmcaLowValueStatementDetail'] = true;
        $this->usmcaLowValueStatementDetail = $usmcaLowValueStatementDetail;
        return $this;
    }
}