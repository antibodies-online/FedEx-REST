<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyShippingDocumentSpecification extends \ArrayObject
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
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    protected $generalAgencyAgreementDetail;
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail
     */
    protected $returnInstructionsDetail;
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail
     */
    protected $op900Detail;
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    protected $usmcaCertificationOfOriginDetail;
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    protected $usmcaCommercialInvoiceCertificationOfOriginDetail;
    /**
     * Indicates the types of shipping documents requested.
     *
     * @var list<string>
     */
    protected $shippingDocumentTypes;
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCertificateOfOrigin
     */
    protected $certificateOfOrigin;
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @var ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCommercialInvoiceDetail
     */
    protected $commercialInvoiceDetail;
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail
    {
        return $this->generalAgencyAgreementDetail;
    }
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     *
     * @return self
     */
    public function setGeneralAgencyAgreementDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail): self
    {
        $this->initialized['generalAgencyAgreementDetail'] = true;
        $this->generalAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail
     */
    public function getReturnInstructionsDetail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail
    {
        return $this->returnInstructionsDetail;
    }
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail $returnInstructionsDetail
     *
     * @return self
     */
    public function setReturnInstructionsDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationReturnInstructionsDetail $returnInstructionsDetail): self
    {
        $this->initialized['returnInstructionsDetail'] = true;
        $this->returnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail
     */
    public function getOp900Detail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail
    {
        return $this->op900Detail;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail $op900Detail
     *
     * @return self
     */
    public function setOp900Detail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationOp900Detail $op900Detail): self
    {
        $this->initialized['op900Detail'] = true;
        $this->op900Detail = $op900Detail;
        return $this;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    public function getUsmcaCertificationOfOriginDetail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
    {
        return $this->usmcaCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCertificationOfOriginDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail): self
    {
        $this->initialized['usmcaCertificationOfOriginDetail'] = true;
        $this->usmcaCertificationOfOriginDetail = $usmcaCertificationOfOriginDetail;
        return $this;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
    {
        return $this->usmcaCommercialInvoiceCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail): self
    {
        $this->initialized['usmcaCommercialInvoiceCertificationOfOriginDetail'] = true;
        $this->usmcaCommercialInvoiceCertificationOfOriginDetail = $usmcaCommercialInvoiceCertificationOfOriginDetail;
        return $this;
    }
    /**
     * Indicates the types of shipping documents requested.
     *
     * @return list<string>
     */
    public function getShippingDocumentTypes(): array
    {
        return $this->shippingDocumentTypes;
    }
    /**
     * Indicates the types of shipping documents requested.
     *
     * @param list<string> $shippingDocumentTypes
     *
     * @return self
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes): self
    {
        $this->initialized['shippingDocumentTypes'] = true;
        $this->shippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCertificateOfOrigin
     */
    public function getCertificateOfOrigin(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCertificateOfOrigin
    {
        return $this->certificateOfOrigin;
    }
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin
     *
     * @return self
     */
    public function setCertificateOfOrigin(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin): self
    {
        $this->initialized['certificateOfOrigin'] = true;
        $this->certificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @return ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail(): ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCommercialInvoiceDetail
    {
        return $this->commercialInvoiceDetail;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @param ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail
     *
     * @return self
     */
    public function setCommercialInvoiceDetail(ShipV1OpenshipmentsPostBodyShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail): self
    {
        $this->initialized['commercialInvoiceDetail'] = true;
        $this->commercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
}