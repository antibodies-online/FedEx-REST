<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail extends \ArrayObject
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
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem> $customerImageUsages
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
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1ShipmentsPostBodyRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}