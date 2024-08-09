<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    protected $returnEmailDetail;
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    protected $rma;
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
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
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    public function getReturnEmailDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
    {
        return $this->returnEmailDetail;
    }
    /**
     * These are email details for the return shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail
     *
     * @return self
     */
    public function setReturnEmailDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail): self
    {
        $this->initialized['returnEmailDetail'] = true;
        $this->returnEmailDetail = $returnEmailDetail;
        return $this;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    public function getRma(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
    {
        return $this->rma;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma
     *
     * @return self
     */
    public function setRma(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma): self
    {
        $this->initialized['rma'] = true;
        $this->rma = $rma;
        return $this;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
     */
    public function getReturnAssociationDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
    {
        return $this->returnAssociationDetail;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail
     *
     * @return self
     */
    public function setReturnAssociationDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail): self
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