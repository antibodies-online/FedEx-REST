<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail extends \ArrayObject
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
     * Specify additional information (text) to be inserted into the return document.<br>Example: This is additional text printed on Return Label
     *
     * @var string
     */
    protected $customText;
    /**
     * These are characteristics of a shipping document to be produced.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specify additional information (text) to be inserted into the return document.<br>Example: This is additional text printed on Return Label
     *
     * @return string
     */
    public function getCustomText(): string
    {
        return $this->customText;
    }
    /**
     * Specify additional information (text) to be inserted into the return document.<br>Example: This is additional text printed on Return Label
     *
     * @param string $customText
     *
     * @return self
     */
    public function setCustomText(string $customText): self
    {
        $this->initialized['customText'] = true;
        $this->customText = $customText;
        return $this;
    }
    /**
     * These are characteristics of a shipping document to be produced.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat
     */
    public function getDocumentFormat(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * These are characteristics of a shipping document to be produced.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}