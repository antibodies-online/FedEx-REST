<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    protected $generalAgencyAgreementDetail;
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail
     */
    protected $returnInstructionsDetail;
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail
     */
    protected $op900Detail;
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    protected $usmcaCertificationOfOriginDetail;
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
     */
    protected $certificateOfOrigin;
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
     */
    protected $commercialInvoiceDetail;
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
    {
        return $this->generalAgencyAgreementDetail;
    }
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     *
     * @return self
     */
    public function setGeneralAgencyAgreementDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail): self
    {
        $this->initialized['generalAgencyAgreementDetail'] = true;
        $this->generalAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail
     */
    public function getReturnInstructionsDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail
    {
        return $this->returnInstructionsDetail;
    }
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail $returnInstructionsDetail
     *
     * @return self
     */
    public function setReturnInstructionsDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail $returnInstructionsDetail): self
    {
        $this->initialized['returnInstructionsDetail'] = true;
        $this->returnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail
     */
    public function getOp900Detail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail
    {
        return $this->op900Detail;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail $op900Detail
     *
     * @return self
     */
    public function setOp900Detail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationOp900Detail $op900Detail): self
    {
        $this->initialized['op900Detail'] = true;
        $this->op900Detail = $op900Detail;
        return $this;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    public function getUsmcaCertificationOfOriginDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
    {
        return $this->usmcaCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCertificationOfOriginDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail): self
    {
        $this->initialized['usmcaCertificationOfOriginDetail'] = true;
        $this->usmcaCertificationOfOriginDetail = $usmcaCertificationOfOriginDetail;
        return $this;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
    {
        return $this->usmcaCommercialInvoiceCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail): self
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
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
     */
    public function getCertificateOfOrigin(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
    {
        return $this->certificateOfOrigin;
    }
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin
     *
     * @return self
     */
    public function setCertificateOfOrigin(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin): self
    {
        $this->initialized['certificateOfOrigin'] = true;
        $this->certificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
    {
        return $this->commercialInvoiceDetail;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail
     *
     * @return self
     */
    public function setCommercialInvoiceDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail): self
    {
        $this->initialized['commercialInvoiceDetail'] = true;
        $this->commercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
}