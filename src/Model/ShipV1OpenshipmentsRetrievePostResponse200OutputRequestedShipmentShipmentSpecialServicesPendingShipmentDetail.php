<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail extends \ArrayObject
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
     * This is Pending Shipment Type. Must include the value 'EMAIL' for email return shipments.<br>Not applicable for other types of shipments.
     *
     * @var string
     */
    protected $pendingShipmentType;
    /**
     * Use this object to allow the Email Label shipment originator,  specify if the Email label shipment completer can make modifications to editable shipment data.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions
     */
    protected $processingOptions;
    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification
     */
    protected $recommendedDocumentSpecification;
    /**
     * These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail
     */
    protected $emailLabelDetail;
    /**
     * These are the reference document details with the shipment.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem>
     */
    protected $attachedDocuments;
    /**
     * This is the Email Label expiration date. The maximum expiration date for an Email Return Label must be greater of equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2020-01-01
     *
     * @var string
     */
    protected $expirationTimeStamp;
    /**
     * This is Pending Shipment Type. Must include the value 'EMAIL' for email return shipments.<br>Not applicable for other types of shipments.
     *
     * @return string
     */
    public function getPendingShipmentType() : string
    {
        return $this->pendingShipmentType;
    }
    /**
     * This is Pending Shipment Type. Must include the value 'EMAIL' for email return shipments.<br>Not applicable for other types of shipments.
     *
     * @param string $pendingShipmentType
     *
     * @return self
     */
    public function setPendingShipmentType(string $pendingShipmentType) : self
    {
        $this->initialized['pendingShipmentType'] = true;
        $this->pendingShipmentType = $pendingShipmentType;
        return $this;
    }
    /**
     * Use this object to allow the Email Label shipment originator,  specify if the Email label shipment completer can make modifications to editable shipment data.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions
     */
    public function getProcessingOptions() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions
    {
        return $this->processingOptions;
    }
    /**
     * Use this object to allow the Email Label shipment originator,  specify if the Email label shipment completer can make modifications to editable shipment data.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions $processingOptions
     *
     * @return self
     */
    public function setProcessingOptions(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailProcessingOptions $processingOptions) : self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;
        return $this;
    }
    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification
     */
    public function getRecommendedDocumentSpecification() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification
    {
        return $this->recommendedDocumentSpecification;
    }
    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification $recommendedDocumentSpecification
     *
     * @return self
     */
    public function setRecommendedDocumentSpecification(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailRecommendedDocumentSpecification $recommendedDocumentSpecification) : self
    {
        $this->initialized['recommendedDocumentSpecification'] = true;
        $this->recommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail
     */
    public function getEmailLabelDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail
    {
        return $this->emailLabelDetail;
    }
    /**
     * These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail $emailLabelDetail
     *
     * @return self
     */
    public function setEmailLabelDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailEmailLabelDetail $emailLabelDetail) : self
    {
        $this->initialized['emailLabelDetail'] = true;
        $this->emailLabelDetail = $emailLabelDetail;
        return $this;
    }
    /**
     * These are the reference document details with the shipment.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem>
     */
    public function getAttachedDocuments() : array
    {
        return $this->attachedDocuments;
    }
    /**
     * These are the reference document details with the shipment.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem> $attachedDocuments
     *
     * @return self
     */
    public function setAttachedDocuments(array $attachedDocuments) : self
    {
        $this->initialized['attachedDocuments'] = true;
        $this->attachedDocuments = $attachedDocuments;
        return $this;
    }
    /**
     * This is the Email Label expiration date. The maximum expiration date for an Email Return Label must be greater of equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2020-01-01
     *
     * @return string
     */
    public function getExpirationTimeStamp() : string
    {
        return $this->expirationTimeStamp;
    }
    /**
     * This is the Email Label expiration date. The maximum expiration date for an Email Return Label must be greater of equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2020-01-01
     *
     * @param string $expirationTimeStamp
     *
     * @return self
     */
    public function setExpirationTimeStamp(string $expirationTimeStamp) : self
    {
        $this->initialized['expirationTimeStamp'] = true;
        $this->expirationTimeStamp = $expirationTimeStamp;
        return $this;
    }
}