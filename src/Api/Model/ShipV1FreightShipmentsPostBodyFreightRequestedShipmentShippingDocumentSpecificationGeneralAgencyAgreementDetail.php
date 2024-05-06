<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail extends \ArrayObject
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
     * Specify the shipping document format.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}