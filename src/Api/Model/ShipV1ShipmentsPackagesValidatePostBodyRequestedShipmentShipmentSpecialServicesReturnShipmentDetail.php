<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail extends \ArrayObject
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
     * These are email details for the return shipment.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    protected $returnEmailDetail;
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    protected $rma;
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
     */
    protected $returnAssociationDetail;
    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @var string
     */
    protected $returnType;
    /**
     * These are email details for the return shipment.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    public function getReturnEmailDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
    {
        return $this->returnEmailDetail;
    }
    /**
     * These are email details for the return shipment.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail
     *
     * @return self
     */
    public function setReturnEmailDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail): self
    {
        $this->initialized['returnEmailDetail'] = true;
        $this->returnEmailDetail = $returnEmailDetail;
        return $this;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    public function getRma(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
    {
        return $this->rma;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma
     *
     * @return self
     */
    public function setRma(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma): self
    {
        $this->initialized['rma'] = true;
        $this->rma = $rma;
        return $this;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
     */
    public function getReturnAssociationDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
    {
        return $this->returnAssociationDetail;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail
     *
     * @return self
     */
    public function setReturnAssociationDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail): self
    {
        $this->initialized['returnAssociationDetail'] = true;
        $this->returnAssociationDetail = $returnAssociationDetail;
        return $this;
    }
    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @return string
     */
    public function getReturnType(): string
    {
        return $this->returnType;
    }
    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * @param string $returnType
     *
     * @return self
     */
    public function setReturnType(string $returnType): self
    {
        $this->initialized['returnType'] = true;
        $this->returnType = $returnType;
        return $this;
    }
}