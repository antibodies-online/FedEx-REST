<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostResponse201OutputDocumentResponsesItemMetaData extends \ArrayObject
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
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible.
     *
     * @var string
     */
    protected $formCode;
    /**
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>
     *
     * @var string
     */
    protected $documentType;
    /**
     * This is the document id or the upload reference. Note this and use this in your shipment if you have uploaded the document prior to shipment request.<br> Example: 090493e181586308
     *
     * @var string
     */
    protected $docId;
    /**
     * This is the reference server folder id, where the document is uploaded. Note that, this data is returned only for Post-Shipment Upload scenario
     *
     * @var string
     */
    protected $folderId;
    /**
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible.
     *
     * @return string
     */
    public function getFormCode(): string
    {
        return $this->formCode;
    }
    /**
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible.
     *
     * @param string $formCode
     *
     * @return self
     */
    public function setFormCode(string $formCode): self
    {
        $this->initialized['formCode'] = true;
        $this->formCode = $formCode;
        return $this;
    }
    /**
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>
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
     * This is the document id or the upload reference. Note this and use this in your shipment if you have uploaded the document prior to shipment request.<br> Example: 090493e181586308
     *
     * @return string
     */
    public function getDocId(): string
    {
        return $this->docId;
    }
    /**
     * This is the document id or the upload reference. Note this and use this in your shipment if you have uploaded the document prior to shipment request.<br> Example: 090493e181586308
     *
     * @param string $docId
     *
     * @return self
     */
    public function setDocId(string $docId): self
    {
        $this->initialized['docId'] = true;
        $this->docId = $docId;
        return $this;
    }
    /**
     * This is the reference server folder id, where the document is uploaded. Note that, this data is returned only for Post-Shipment Upload scenario
     *
     * @return string
     */
    public function getFolderId(): string
    {
        return $this->folderId;
    }
    /**
     * This is the reference server folder id, where the document is uploaded. Note that, this data is returned only for Post-Shipment Upload scenario
     *
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId(string $folderId): self
    {
        $this->initialized['folderId'] = true;
        $this->folderId = $folderId;
        return $this;
    }
}