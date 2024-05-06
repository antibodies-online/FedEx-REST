<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetail extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    protected $usmcaLowValueStatementDetail;
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail() : ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail
    {
        return $this->usmcaLowValueStatementDetail;
    }
    /**
     * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     *
     * @return self
     */
    public function setUsmcaLowValueStatementDetail(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDeclarationStatementDetailUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail) : self
    {
        $this->initialized['usmcaLowValueStatementDetail'] = true;
        $this->usmcaLowValueStatementDetail = $usmcaLowValueStatementDetail;
        return $this;
    }
}