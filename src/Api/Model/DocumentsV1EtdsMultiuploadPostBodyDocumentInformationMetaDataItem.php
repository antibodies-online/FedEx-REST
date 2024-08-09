<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostBodyDocumentInformationMetaDataItem extends \ArrayObject
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
     * Specify the file name being uploaded.<br> Example: invoice_file1.txt
     *
     * @var string
     */
    protected $fileName;
    /**
     * Specify the unique reference to the file. <br> Example : inv_file1_ctx_02132021_5
     *
     * @var string
     */
    protected $fileReferenceId;
    /**
     * Specify the file type or content type of the document to be uploaded
     *
     * @var string
     */
    protected $contentType;
    /**
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible. <br> Note: if shipDocumentType value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is REQUIRED to pass value as USMCA
     *
     * @var string
     */
    protected $formCode;
    /**
     * Provide origin FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @var string
     */
    protected $originLocationCode;
    /**
     * Provide destination FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @var string
     */
    protected $destinationLocationCode;
    /**
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section <b>Upload Documents</b> on this page.
     *
     * @var string
     */
    protected $shipDocumentType;
    /**
     * Specify the file name being uploaded.<br> Example: invoice_file1.txt
     *
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * Specify the file name being uploaded.<br> Example: invoice_file1.txt
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Specify the unique reference to the file. <br> Example : inv_file1_ctx_02132021_5
     *
     * @return string
     */
    public function getFileReferenceId(): string
    {
        return $this->fileReferenceId;
    }
    /**
     * Specify the unique reference to the file. <br> Example : inv_file1_ctx_02132021_5
     *
     * @param string $fileReferenceId
     *
     * @return self
     */
    public function setFileReferenceId(string $fileReferenceId): self
    {
        $this->initialized['fileReferenceId'] = true;
        $this->fileReferenceId = $fileReferenceId;
        return $this;
    }
    /**
     * Specify the file type or content type of the document to be uploaded
     *
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * Specify the file type or content type of the document to be uploaded
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible. <br> Note: if shipDocumentType value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is REQUIRED to pass value as USMCA
     *
     * @return string
     */
    public function getFormCode(): string
    {
        return $this->formCode;
    }
    /**
     * Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible. <br> Note: if shipDocumentType value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is REQUIRED to pass value as USMCA
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
     * Provide origin FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @return string
     */
    public function getOriginLocationCode(): string
    {
        return $this->originLocationCode;
    }
    /**
     * Provide origin FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @param string $originLocationCode
     *
     * @return self
     */
    public function setOriginLocationCode(string $originLocationCode): self
    {
        $this->initialized['originLocationCode'] = true;
        $this->originLocationCode = $originLocationCode;
        return $this;
    }
    /**
     * Provide destination FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @return string
     */
    public function getDestinationLocationCode(): string
    {
        return $this->destinationLocationCode;
    }
    /**
     * Provide destination FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     *
     * @param string $destinationLocationCode
     *
     * @return self
     */
    public function setDestinationLocationCode(string $destinationLocationCode): self
    {
        $this->initialized['destinationLocationCode'] = true;
        $this->destinationLocationCode = $destinationLocationCode;
        return $this;
    }
    /**
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section <b>Upload Documents</b> on this page.
     *
     * @return string
     */
    public function getShipDocumentType(): string
    {
        return $this->shipDocumentType;
    }
    /**
     * Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section <b>Upload Documents</b> on this page.
     *
     * @param string $shipDocumentType
     *
     * @return self
     */
    public function setShipDocumentType(string $shipDocumentType): self
    {
        $this->initialized['shipDocumentType'] = true;
        $this->shipDocumentType = $shipDocumentType;
        return $this;
    }
}