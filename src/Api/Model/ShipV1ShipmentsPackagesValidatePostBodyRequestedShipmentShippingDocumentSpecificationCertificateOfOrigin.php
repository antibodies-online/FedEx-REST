<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOrigin extends \ArrayObject
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
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginCustomerImageUsagesItem> $customerImageUsages
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
     * Specify the shipping document format.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormat
     */
    public function getDocumentFormat() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCertificateOfOriginDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}