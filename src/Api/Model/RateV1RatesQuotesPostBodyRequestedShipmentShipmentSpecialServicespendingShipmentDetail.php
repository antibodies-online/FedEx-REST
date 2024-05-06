<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail extends \ArrayObject
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
     * This is Pending Shipment Type. Must include the value EMAIL for email return shipments.<br>Not applicable for other types of shipments.
     *
     * @var string
     */
    protected $pendingShipmentType;
    /**
     * Use this object to specify the processing options associated with Pending Shipment request. This is useful for the Email Label originator to specify if the completer can make modifications to editable shipment data.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions
     */
    protected $processingOptions;
    /**
     * These are recommended document specification which are recommended to be included with the shipment.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification
     */
    protected $recommendedDocumentSpecification;
    /**
     * Describes specific information about the email label shipment.<ul><li>Message: Content of the email message</li><li>Recipients: EMailRecipient</li><li>emailAddress - email address of the recipient</li><li>role - role type of the recipient</li><li>optionsRequested</li><li>localization</li>
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail
     */
    protected $emailLabelDetail;
    /**
     * These are Upload document details provided by the initiator of the shipment.
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem>
     */
    protected $documentReferences;
    /**
     * Specify the Email Return Label expiration date. The Maximum expiration date for an Email Return Label must be greater or equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2012-12-31.
     *
     * @var string
     */
    protected $expirationTimeStamp;
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * This is Pending Shipment Type. Must include the value EMAIL for email return shipments.<br>Not applicable for other types of shipments.
     *
     * @return string
     */
    public function getPendingShipmentType() : string
    {
        return $this->pendingShipmentType;
    }
    /**
     * This is Pending Shipment Type. Must include the value EMAIL for email return shipments.<br>Not applicable for other types of shipments.
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
     * Use this object to specify the processing options associated with Pending Shipment request. This is useful for the Email Label originator to specify if the completer can make modifications to editable shipment data.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions
     */
    public function getProcessingOptions() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions
    {
        return $this->processingOptions;
    }
    /**
     * Use this object to specify the processing options associated with Pending Shipment request. This is useful for the Email Label originator to specify if the completer can make modifications to editable shipment data.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions $processingOptions
     *
     * @return self
     */
    public function setProcessingOptions(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions $processingOptions) : self
    {
        $this->initialized['processingOptions'] = true;
        $this->processingOptions = $processingOptions;
        return $this;
    }
    /**
     * These are recommended document specification which are recommended to be included with the shipment.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification
     */
    public function getRecommendedDocumentSpecification() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification
    {
        return $this->recommendedDocumentSpecification;
    }
    /**
     * These are recommended document specification which are recommended to be included with the shipment.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification $recommendedDocumentSpecification
     *
     * @return self
     */
    public function setRecommendedDocumentSpecification(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailRecommendedDocumentSpecification $recommendedDocumentSpecification) : self
    {
        $this->initialized['recommendedDocumentSpecification'] = true;
        $this->recommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * Describes specific information about the email label shipment.<ul><li>Message: Content of the email message</li><li>Recipients: EMailRecipient</li><li>emailAddress - email address of the recipient</li><li>role - role type of the recipient</li><li>optionsRequested</li><li>localization</li>
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail
     */
    public function getEmailLabelDetail() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail
    {
        return $this->emailLabelDetail;
    }
    /**
     * Describes specific information about the email label shipment.<ul><li>Message: Content of the email message</li><li>Recipients: EMailRecipient</li><li>emailAddress - email address of the recipient</li><li>role - role type of the recipient</li><li>optionsRequested</li><li>localization</li>
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail $emailLabelDetail
     *
     * @return self
     */
    public function setEmailLabelDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailEmailLabelDetail $emailLabelDetail) : self
    {
        $this->initialized['emailLabelDetail'] = true;
        $this->emailLabelDetail = $emailLabelDetail;
        return $this;
    }
    /**
     * These are Upload document details provided by the initiator of the shipment.
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem>
     */
    public function getDocumentReferences() : array
    {
        return $this->documentReferences;
    }
    /**
     * These are Upload document details provided by the initiator of the shipment.
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem> $documentReferences
     *
     * @return self
     */
    public function setDocumentReferences(array $documentReferences) : self
    {
        $this->initialized['documentReferences'] = true;
        $this->documentReferences = $documentReferences;
        return $this;
    }
    /**
     * Specify the Email Return Label expiration date. The Maximum expiration date for an Email Return Label must be greater or equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2012-12-31.
     *
     * @return string
     */
    public function getExpirationTimeStamp() : string
    {
        return $this->expirationTimeStamp;
    }
    /**
     * Specify the Email Return Label expiration date. The Maximum expiration date for an Email Return Label must be greater or equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2012-12-31.
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
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailShipmentDryIceDetail $shipmentDryIceDetail) : self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
}