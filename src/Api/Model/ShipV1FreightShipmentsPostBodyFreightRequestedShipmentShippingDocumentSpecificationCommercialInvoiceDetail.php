<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail extends \ArrayObject
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
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    protected $documentFormat;
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages() : array
    {
        return $this->customerImageUsages;
    }
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem> $customerImageUsages
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
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    public function getDocumentFormat() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
    {
        return $this->documentFormat;
    }
    /**
     * Specify the shipping document format.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
}