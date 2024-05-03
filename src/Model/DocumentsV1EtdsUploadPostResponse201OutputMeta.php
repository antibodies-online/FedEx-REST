<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1EtdsUploadPostResponse201OutputMeta extends \ArrayObject
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
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>.
     *
     * @var string
     */
    protected $documentType;
    /**
     * This is the document id or the upload reference. Use this docId in your shipment, if you have uploaded the document prior to shipment request.<br>For MPS, this docId must be used for all the packages in the shipment.<br>Example: 090493e181586308<br><i>Note:</i><ul><li><i>For MPS post the shipment request, use the master shipment tracking number when uploading the documents. </i></li></ul>.
     *
     * @var string
     */
    protected $docId;
    /**
     * This is the reference server folder id, where the document is uploaded. Note that, for a Pre-Shipment Upload scenario, this field will return a pseudo data.
     *
     * @var list<string>
     */
    protected $folderId;

    /**
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>.
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    /**
     * Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>.
     */
    public function setDocumentType(string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * This is the document id or the upload reference. Use this docId in your shipment, if you have uploaded the document prior to shipment request.<br>For MPS, this docId must be used for all the packages in the shipment.<br>Example: 090493e181586308<br><i>Note:</i><ul><li><i>For MPS post the shipment request, use the master shipment tracking number when uploading the documents. </i></li></ul>.
     */
    public function getDocId(): string
    {
        return $this->docId;
    }

    /**
     * This is the document id or the upload reference. Use this docId in your shipment, if you have uploaded the document prior to shipment request.<br>For MPS, this docId must be used for all the packages in the shipment.<br>Example: 090493e181586308<br><i>Note:</i><ul><li><i>For MPS post the shipment request, use the master shipment tracking number when uploading the documents. </i></li></ul>.
     */
    public function setDocId(string $docId): self
    {
        $this->initialized['docId'] = true;
        $this->docId = $docId;

        return $this;
    }

    /**
     * This is the reference server folder id, where the document is uploaded. Note that, for a Pre-Shipment Upload scenario, this field will return a pseudo data.
     *
     * @return list<string>
     */
    public function getFolderId(): array
    {
        return $this->folderId;
    }

    /**
     * This is the reference server folder id, where the document is uploaded. Note that, for a Pre-Shipment Upload scenario, this field will return a pseudo data.
     *
     * @param list<string> $folderId
     */
    public function setFolderId(array $folderId): self
    {
        $this->initialized['folderId'] = true;
        $this->folderId = $folderId;

        return $this;
    }
}