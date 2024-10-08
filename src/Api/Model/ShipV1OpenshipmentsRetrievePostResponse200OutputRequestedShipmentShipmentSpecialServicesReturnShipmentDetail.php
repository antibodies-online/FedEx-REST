<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail extends \ArrayObject
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
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    protected $returnEmailDetail;
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    protected $rma;
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
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
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
     */
    public function getReturnEmailDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail
    {
        return $this->returnEmailDetail;
    }
    /**
     * These are email details for the return shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail
     *
     * @return self
     */
    public function setReturnEmailDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnEmailDetail $returnEmailDetail): self
    {
        $this->initialized['returnEmailDetail'] = true;
        $this->returnEmailDetail = $returnEmailDetail;
        return $this;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
     */
    public function getRma(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma
    {
        return $this->rma;
    }
    /**
     * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma
     *
     * @return self
     */
    public function setRma(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailRma $rma): self
    {
        $this->initialized['rma'] = true;
        $this->rma = $rma;
        return $this;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
     */
    public function getReturnAssociationDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail
    {
        return $this->returnAssociationDetail;
    }
    /**
     * Specifies the details of an outbound shipment in order to associate the return shipment to it.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail
     *
     * @return self
     */
    public function setReturnAssociationDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetailReturnAssociationDetail $returnAssociationDetail): self
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