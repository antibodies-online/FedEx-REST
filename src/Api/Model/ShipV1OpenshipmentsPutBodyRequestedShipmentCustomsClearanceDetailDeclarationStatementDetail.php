<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    protected $usmcaLowValueStatementDetail;
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
    {
        return $this->usmcaLowValueStatementDetail;
    }
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     *
     * @return self
     */
    public function setUsmcaLowValueStatementDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail) : self
    {
        $this->initialized['usmcaLowValueStatementDetail'] = true;
        $this->usmcaLowValueStatementDetail = $usmcaLowValueStatementDetail;
        return $this;
    }
}