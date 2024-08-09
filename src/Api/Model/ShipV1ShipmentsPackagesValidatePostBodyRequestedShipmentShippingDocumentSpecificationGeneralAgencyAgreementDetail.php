<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetail extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specify the shipping document format.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
     */
    public function getDocumentFormat(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationGeneralAgencyAgreementDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}