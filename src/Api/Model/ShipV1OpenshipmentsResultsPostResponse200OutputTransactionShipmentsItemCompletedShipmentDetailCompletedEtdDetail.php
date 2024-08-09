<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetail extends \ArrayObject
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
     * Returns the folder id where the documents is uploaded <br> Example: "0b0493e580dc1a1b"
     *
     * @var string
     */
    protected $folderId;
    /**
     * Returns the type of the document that is being uploaded <br> Example: "COMMERCIAL_INVOICE"
     *
     * @var string
     */
    protected $type;
    /**
     * Specify the document upload reference details.
     *
     * @var list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetailUploadDocumentReferenceDetailsItem>
     */
    protected $uploadDocumentReferenceDetails;
    /**
     * Returns the folder id where the documents is uploaded <br> Example: "0b0493e580dc1a1b"
     *
     * @return string
     */
    public function getFolderId(): string
    {
        return $this->folderId;
    }
    /**
     * Returns the folder id where the documents is uploaded <br> Example: "0b0493e580dc1a1b"
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
    /**
     * Returns the type of the document that is being uploaded <br> Example: "COMMERCIAL_INVOICE"
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Returns the type of the document that is being uploaded <br> Example: "COMMERCIAL_INVOICE"
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Specify the document upload reference details.
     *
     * @return list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetailUploadDocumentReferenceDetailsItem>
     */
    public function getUploadDocumentReferenceDetails(): array
    {
        return $this->uploadDocumentReferenceDetails;
    }
    /**
     * Specify the document upload reference details.
     *
     * @param list<ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedEtdDetailUploadDocumentReferenceDetailsItem> $uploadDocumentReferenceDetails
     *
     * @return self
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails): self
    {
        $this->initialized['uploadDocumentReferenceDetails'] = true;
        $this->uploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
}