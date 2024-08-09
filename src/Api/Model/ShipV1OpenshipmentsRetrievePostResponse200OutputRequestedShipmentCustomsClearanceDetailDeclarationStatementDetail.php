<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail extends \ArrayObject
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
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    protected $usmcaLowValueStatementDetail;
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
    {
        return $this->usmcaLowValueStatementDetail;
    }
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     *
     * @return self
     */
    public function setUsmcaLowValueStatementDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail): self
    {
        $this->initialized['usmcaLowValueStatementDetail'] = true;
        $this->usmcaLowValueStatementDetail = $usmcaLowValueStatementDetail;
        return $this;
    }
}