<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification extends \ArrayObject
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
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    protected $generalAgencyAgreementDetail;
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationOp900Detail
     */
    protected $op900Detail;
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    protected $usmcaCertificationOfOriginDetail;
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
     */
    protected $certificateOfOrigin;
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
     */
    protected $commercialInvoiceDetail;
    /**
     * These are the data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail
     */
    protected $freightAddressLabelDetail;
    /**
     * Specifies Freight Bill Of Lading as the shipping document
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail
     */
    protected $freightBillOfLadingDetail;
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail
    {
        return $this->generalAgencyAgreementDetail;
    }
    /**
     * Use this object to specify details to generate general agency agreement detail.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     *
     * @return self
     */
    public function setGeneralAgencyAgreementDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail $generalAgencyAgreementDetail) : self
    {
        $this->initialized['generalAgencyAgreementDetail'] = true;
        $this->generalAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationOp900Detail
     */
    public function getOp900Detail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationOp900Detail
    {
        return $this->op900Detail;
    }
    /**
     * Use this object to specify details to generate the OP-900 document for hazardous material packages.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationOp900Detail $op900Detail
     *
     * @return self
     */
    public function setOp900Detail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationOp900Detail $op900Detail) : self
    {
        $this->initialized['op900Detail'] = true;
        $this->op900Detail = $op900Detail;
        return $this;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
     */
    public function getUsmcaCertificationOfOriginDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail
    {
        return $this->usmcaCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCertificationOfOriginDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail) : self
    {
        $this->initialized['usmcaCertificationOfOriginDetail'] = true;
        $this->usmcaCertificationOfOriginDetail = $usmcaCertificationOfOriginDetail;
        return $this;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail
    {
        return $this->usmcaCommercialInvoiceCertificationOfOriginDetail;
    }
    /**
     * The instructions indicating commercial invoice certification of origin.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     * @return self
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail) : self
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
    public function getShippingDocumentTypes() : array
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
    public function setShippingDocumentTypes(array $shippingDocumentTypes) : self
    {
        $this->initialized['shippingDocumentTypes'] = true;
        $this->shippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
     */
    public function getCertificateOfOrigin() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin
    {
        return $this->certificateOfOrigin;
    }
    /**
     * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin
     *
     * @return self
     */
    public function setCertificateOfOrigin(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin $certificateOfOrigin) : self
    {
        $this->initialized['certificateOfOrigin'] = true;
        $this->certificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail
    {
        return $this->commercialInvoiceDetail;
    }
    /**
     * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail
     *
     * @return self
     */
    public function setCommercialInvoiceDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail $commercialInvoiceDetail) : self
    {
        $this->initialized['commercialInvoiceDetail'] = true;
        $this->commercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    /**
     * These are the data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail
     */
    public function getFreightAddressLabelDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail
    {
        return $this->freightAddressLabelDetail;
    }
    /**
     * These are the data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail $freightAddressLabelDetail
     *
     * @return self
     */
    public function setFreightAddressLabelDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightAddressLabelDetail $freightAddressLabelDetail) : self
    {
        $this->initialized['freightAddressLabelDetail'] = true;
        $this->freightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    /**
     * Specifies Freight Bill Of Lading as the shipping document
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail
     */
    public function getFreightBillOfLadingDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail
    {
        return $this->freightBillOfLadingDetail;
    }
    /**
     * Specifies Freight Bill Of Lading as the shipping document
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail $freightBillOfLadingDetail
     *
     * @return self
     */
    public function setFreightBillOfLadingDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationFreightBillOfLadingDetail $freightBillOfLadingDetail) : self
    {
        $this->initialized['freightBillOfLadingDetail'] = true;
        $this->freightBillOfLadingDetail = $freightBillOfLadingDetail;
        return $this;
    }
}