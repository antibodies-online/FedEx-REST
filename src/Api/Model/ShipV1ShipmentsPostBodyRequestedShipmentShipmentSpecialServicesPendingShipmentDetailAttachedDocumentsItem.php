<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetailAttachedDocumentsItem extends \ArrayObject
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
     * This is the uploaded document type.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Specify the reference for the uploaded document.<br>Example: Reference
     *
     * @var string
     */
    protected $documentReference;
    /**
     * This is the document description of the attached document.<br>Example: PRO FORMA INVOICE
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
     * This is the uploaded document type.
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * This is the uploaded document type.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Specify the reference for the uploaded document.<br>Example: Reference
     *
     * @return string
     */
    public function getDocumentReference(): string
    {
        return $this->documentReference;
    }
    /**
     * Specify the reference for the uploaded document.<br>Example: Reference
     *
     * @param string $documentReference
     *
     * @return self
     */
    public function setDocumentReference(string $documentReference): self
    {
        $this->initialized['documentReference'] = true;
        $this->documentReference = $documentReference;
        return $this;
    }
    /**
     * This is the document description of the attached document.<br>Example: PRO FORMA INVOICE
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * This is the document description of the attached document.<br>Example: PRO FORMA INVOICE
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
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
    public function getDocumentId(): string
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
    public function setDocumentId(string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
}