<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail extends \ArrayObject
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
     * Specify the shipping document format.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    public function getDocumentFormat(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}