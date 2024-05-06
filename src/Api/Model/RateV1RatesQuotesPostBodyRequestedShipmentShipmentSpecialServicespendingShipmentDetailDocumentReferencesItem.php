<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailDocumentReferencesItem extends \ArrayObject
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
     * These are the type of document specified in the PendingShipment request.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Customer Reference
     *
     * @var string
     */
    protected $customerReference;
    /**
     * Indicate description of the shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @var string
     */
    protected $description;
    /**
     * Specify the document ID for the uploaded document.
     *
     * @var string
     */
    protected $documentId;
    /**
     * These are the type of document specified in the PendingShipment request.
     *
     * @return string
     */
    public function getDocumentType() : string
    {
        return $this->documentType;
    }
    /**
     * These are the type of document specified in the PendingShipment request.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType) : self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Customer Reference
     *
     * @return string
     */
    public function getCustomerReference() : string
    {
        return $this->customerReference;
    }
    /**
     * Customer Reference
     *
     * @param string $customerReference
     *
     * @return self
     */
    public function setCustomerReference(string $customerReference) : self
    {
        $this->initialized['customerReference'] = true;
        $this->customerReference = $customerReference;
        return $this;
    }
    /**
     * Indicate description of the shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicate description of the shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specify the document ID for the uploaded document.
     *
     * @return string
     */
    public function getDocumentId() : string
    {
        return $this->documentId;
    }
    /**
     * Specify the document ID for the uploaded document.
     *
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId(string $documentId) : self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
}