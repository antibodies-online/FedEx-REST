<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetailUploadDocumentReferenceDetailsItem extends \ArrayObject
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
     * Specify document type for the uploaded document. It should match with the type of uploaded document associated with documentId.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Specify the reference for the uploaded document.This is for the customer to reference their uploaded docs when they retrieve them. Could be anything, order number, po number, whatever the customer used to tie the document to something they would use.<br>Note: Ensure to supply document references in case of  Pre-Shipment document upload.</br><br>Example: Reference
     *
     * @var string
     */
    protected $documentReference;
    /**
     * Specify additional information about the uploaded document for better understanding.<br>Example: Certificate of Origin is uploaded for country of manufacturing verification.
     *
     * @var string
     */
    protected $description;
    /**
     * This is the uploaded document ID value.<br>Example: 090927d680038c61
     *
     * @var string
     */
    protected $documentId;
    /**
     * Specify document type for the uploaded document. It should match with the type of uploaded document associated with documentId.
     *
     * @return string
     */
    public function getDocumentType() : string
    {
        return $this->documentType;
    }
    /**
     * Specify document type for the uploaded document. It should match with the type of uploaded document associated with documentId.
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
     * Specify the reference for the uploaded document.This is for the customer to reference their uploaded docs when they retrieve them. Could be anything, order number, po number, whatever the customer used to tie the document to something they would use.<br>Note: Ensure to supply document references in case of  Pre-Shipment document upload.</br><br>Example: Reference
     *
     * @return string
     */
    public function getDocumentReference() : string
    {
        return $this->documentReference;
    }
    /**
     * Specify the reference for the uploaded document.This is for the customer to reference their uploaded docs when they retrieve them. Could be anything, order number, po number, whatever the customer used to tie the document to something they would use.<br>Note: Ensure to supply document references in case of  Pre-Shipment document upload.</br><br>Example: Reference
     *
     * @param string $documentReference
     *
     * @return self
     */
    public function setDocumentReference(string $documentReference) : self
    {
        $this->initialized['documentReference'] = true;
        $this->documentReference = $documentReference;
        return $this;
    }
    /**
     * Specify additional information about the uploaded document for better understanding.<br>Example: Certificate of Origin is uploaded for country of manufacturing verification.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specify additional information about the uploaded document for better understanding.<br>Example: Certificate of Origin is uploaded for country of manufacturing verification.
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
     * This is the uploaded document ID value.<br>Example: 090927d680038c61
     *
     * @return string
     */
    public function getDocumentId() : string
    {
        return $this->documentId;
    }
    /**
     * This is the uploaded document ID value.<br>Example: 090927d680038c61
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