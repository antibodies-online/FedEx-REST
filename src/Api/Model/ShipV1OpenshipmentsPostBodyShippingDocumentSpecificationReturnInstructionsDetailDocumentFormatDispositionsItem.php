<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItem extends \ArrayObject
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
     * Specifies how to e-mail shipping documents.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItemEMailDetail
     */
    protected $eMailDetail;
    /**
     * Specify how to create and return the document.
     *
     * @var string
     */
    protected $dispositionType;
    /**
     * Specifies how to e-mail shipping documents.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItemEMailDetail
     */
    public function getEMailDetail() : ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItemEMailDetail
    {
        return $this->eMailDetail;
    }
    /**
     * Specifies how to e-mail shipping documents.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItemEMailDetail $eMailDetail
     *
     * @return self
     */
    public function setEMailDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetailDocumentFormatDispositionsItemEMailDetail $eMailDetail) : self
    {
        $this->initialized['eMailDetail'] = true;
        $this->eMailDetail = $eMailDetail;
        return $this;
    }
    /**
     * Specify how to create and return the document.
     *
     * @return string
     */
    public function getDispositionType() : string
    {
        return $this->dispositionType;
    }
    /**
     * Specify how to create and return the document.
     *
     * @param string $dispositionType
     *
     * @return self
     */
    public function setDispositionType(string $dispositionType) : self
    {
        $this->initialized['dispositionType'] = true;
        $this->dispositionType = $dispositionType;
        return $this;
    }
}