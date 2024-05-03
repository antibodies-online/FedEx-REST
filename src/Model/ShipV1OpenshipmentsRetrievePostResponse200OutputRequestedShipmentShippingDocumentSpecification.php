<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification extends \ArrayObject
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
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    protected $generalAgencyAgreementDetail;
    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail
     */
    protected $returnInstructionsDetail;
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationOp900Detail
     */
    protected $op900Detail;
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    protected $usmcaCertificationOfOriginDetail;
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    protected $usmcaCommercialInvoiceCertificationOfOriginDetail;
    /**
     * Indicates the types of shipping documents requested.
     *
     * @var list<string>
     */
    protected $shippingDocumentTypes;
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
     */
    protected $certificateOfOrigin;
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
     */
    protected $commercialInvoiceDetail;

    /**
     * Use this object to specify details to generate general agency agreement detail.
     */
    public function getGeneralAgencyAgreementDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
    {
        return $this->generalAgencyAgreementDetail;
    }

    /**
     * Use this object to specify details to generate general agency agreement detail.
     */
    public function setGeneralAgencyAgreementDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail): self
    {
        $this->initialized['generalAgencyAgreementDetail'] = true;
        $this->generalAgencyAgreementDetail = $generalAgencyAgreementDetail;

        return $this;
    }

    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     */
    public function getReturnInstructionsDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail
    {
        return $this->returnInstructionsDetail;
    }

    /**
     * These are return instruction details which will be returned in the transaction to be printed on Return Label.
     */
    public function setReturnInstructionsDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationReturnInstructionsDetail $returnInstructionsDetail): self
    {
        $this->initialized['returnInstructionsDetail'] = true;
        $this->returnInstructionsDetail = $returnInstructionsDetail;

        return $this;
    }

    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     */
    public function getOp900Detail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationOp900Detail
    {
        return $this->op900Detail;
    }

    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     */
    public function setOp900Detail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationOp900Detail $op900Detail): self
    {
        $this->initialized['op900Detail'] = true;
        $this->op900Detail = $op900Detail;

        return $this;
    }

    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     */
    public function getUsmcaCertificationOfOriginDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
    {
        return $this->usmcaCertificationOfOriginDetail;
    }

    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     */
    public function setUsmcaCertificationOfOriginDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail): self
    {
        $this->initialized['usmcaCertificationOfOriginDetail'] = true;
        $this->usmcaCertificationOfOriginDetail = $usmcaCertificationOfOriginDetail;

        return $this;
    }

    /**
     * The instructions indicating commercial invoice certification of origin.
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
    {
        return $this->usmcaCommercialInvoiceCertificationOfOriginDetail;
    }

    /**
     * The instructions indicating commercial invoice certification of origin.
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail): self
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
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes): self
    {
        $this->initialized['shippingDocumentTypes'] = true;
        $this->shippingDocumentTypes = $shippingDocumentTypes;

        return $this;
    }

    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...).
     */
    public function getCertificateOfOrigin(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
    {
        return $this->certificateOfOrigin;
    }

    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...).
     */
    public function setCertificateOfOrigin(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin): self
    {
        $this->initialized['certificateOfOrigin'] = true;
        $this->certificateOfOrigin = $certificateOfOrigin;

        return $this;
    }

    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     */
    public function getCommercialInvoiceDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
    {
        return $this->commercialInvoiceDetail;
    }

    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     */
    public function setCommercialInvoiceDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail): self
    {
        $this->initialized['commercialInvoiceDetail'] = true;
        $this->commercialInvoiceDetail = $commercialInvoiceDetail;

        return $this;
    }
}