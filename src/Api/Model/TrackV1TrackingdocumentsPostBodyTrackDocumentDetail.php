<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TrackingdocumentsPostBodyTrackDocumentDetail extends \ArrayObject
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
     * Indicate the Tracking Document. <br>Valid values are SIGNATURE_PROOF_OF_DELIVERY, BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT.<br>Example: SIGNATURE_PROOF_OF_DELIVERY.<br><i>Note: The SPOD information will be presented as a byte array instead of an image. The byte array is a base64 encoded string, which should be decoded to get the final signature image in PDF or PNG format</i>
     *
     * @var string
     */
    protected $documentType;
    /**
     * Specifies the format of tracking document. <br>Valid values are PDF or PNG.<br>The values are key sensitive.<br>Note: documentTypes BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT does not support PNG.
     *
     * @var string
     */
    protected $documentFormat;
    /**
     * Indicate the Tracking Document. <br>Valid values are SIGNATURE_PROOF_OF_DELIVERY, BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT.<br>Example: SIGNATURE_PROOF_OF_DELIVERY.<br><i>Note: The SPOD information will be presented as a byte array instead of an image. The byte array is a base64 encoded string, which should be decoded to get the final signature image in PDF or PNG format</i>
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * Indicate the Tracking Document. <br>Valid values are SIGNATURE_PROOF_OF_DELIVERY, BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT.<br>Example: SIGNATURE_PROOF_OF_DELIVERY.<br><i>Note: The SPOD information will be presented as a byte array instead of an image. The byte array is a base64 encoded string, which should be decoded to get the final signature image in PDF or PNG format</i>
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
     * Specifies the format of tracking document. <br>Valid values are PDF or PNG.<br>The values are key sensitive.<br>Note: documentTypes BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT does not support PNG.
     *
     * @return string
     */
    public function getDocumentFormat(): string
    {
        return $this->documentFormat;
    }
    /**
     * Specifies the format of tracking document. <br>Valid values are PDF or PNG.<br>The values are key sensitive.<br>Note: documentTypes BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT does not support PNG.
     *
     * @param string $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(string $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}