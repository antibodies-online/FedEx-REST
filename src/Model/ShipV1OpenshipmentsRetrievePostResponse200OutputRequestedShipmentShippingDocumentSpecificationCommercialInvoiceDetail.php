<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetail extends \ArrayObject
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
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    protected $customerImageUsages;
    /**
     * Specify the shipping document format.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
     */
    protected $documentFormat;

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem>
     */
    public function getCustomerImageUsages(): array
    {
        return $this->customerImageUsages;
    }

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailCustomerImageUsagesItem> $customerImageUsages
     */
    public function setCustomerImageUsages(array $customerImageUsages): self
    {
        $this->initialized['customerImageUsages'] = true;
        $this->customerImageUsages = $customerImageUsages;

        return $this;
    }

    /**
     * Specify the shipping document format.
     */
    public function getDocumentFormat(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat
    {
        return $this->documentFormat;
    }

    /**
     * Specify the shipping document format.
     */
    public function setDocumentFormat(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecificationCommercialInvoiceDetailDocumentFormat $documentFormat): self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;

        return $this;
    }
}
