<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail extends \ArrayObject
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
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem> $customerImageUsages
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
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}