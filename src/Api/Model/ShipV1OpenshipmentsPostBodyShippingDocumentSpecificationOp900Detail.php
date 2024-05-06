<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail extends \ArrayObject
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
     * Specify the use and identification of supplied images to be used on document.
     *
     * @var list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Indicates the name to be printed as signature on the document instead of (or in addition to) a signature image.<br>Example: John Hill
     *
     * @var string
     */
    protected $signatureName;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specify the use and identification of supplied images to be used on document.
     *
     * @return list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specify the use and identification of supplied images to be used on document.
     *
     * @param list<ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailCustomerImageUsagesItem> $customerImageUsages
     *
     * @return self
     */
    public function setCustomerImageUsages(array $customerImageUsages) : self
    {
        $this->initialized['customerImageUsages'] = true;
        $this->customerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Indicates the name to be printed as signature on the document instead of (or in addition to) a signature image.<br>Example: John Hill
     *
     * @return string
     */
    public function getSignatureName() : string
    {
        return $this->signatureName;
    }
    /**
     * Indicates the name to be printed as signature on the document instead of (or in addition to) a signature image.<br>Example: John Hill
     *
     * @param string $signatureName
     *
     * @return self
     */
    public function setSignatureName(string $signatureName) : self
    {
        $this->initialized['signatureName'] = true;
        $this->signatureName = $signatureName;
        return $this;
    }
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900DetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}