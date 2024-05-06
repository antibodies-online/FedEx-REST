<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    protected $usmcaLowValueStatementDetail;
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
    {
        return $this->usmcaLowValueStatementDetail;
    }
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     *
     * @return self
     */
    public function setUsmcaLowValueStatementDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail) : self
    {
        $this->initialized['usmcaLowValueStatementDetail'] = true;
        $this->usmcaLowValueStatementDetail = $usmcaLowValueStatementDetail;
        return $this;
    }
}