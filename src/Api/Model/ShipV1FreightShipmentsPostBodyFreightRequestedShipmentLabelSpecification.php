<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification extends \ArrayObject
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
     * Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @var string
     */
    protected $labelFormatType;
    /**
     * This is the order of the Shipping label/documents to be generated.
     *
     * @var string
     */
    protected $labelOrder;
    /**
     * This object allows the control of label content for customization.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationCustomerSpecifiedDetail
     */
    protected $customerSpecifiedDetail;
    /**
     * Specifies the contact and address details of a location.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationPrintedLabelOrigin
     */
    protected $printedLabelOrigin;
    /**
     * Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @var string
     */
    protected $labelStockType;
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @var string
     */
    protected $labelRotation;
    /**
     * Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @var string
     */
    protected $imageType;
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @var string
     */
    protected $labelPrintingOrientation;
    /**
     * Specify whether or not the return deposition is needed.
     *
     * @var bool
     */
    protected $returnedDispositionDetail;
    /**
     * Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @return string
     */
    public function getLabelFormatType(): string
    {
        return $this->labelFormatType;
    }
    /**
     * Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @param string $labelFormatType
     *
     * @return self
     */
    public function setLabelFormatType(string $labelFormatType): self
    {
        $this->initialized['labelFormatType'] = true;
        $this->labelFormatType = $labelFormatType;
        return $this;
    }
    /**
     * This is the order of the Shipping label/documents to be generated.
     *
     * @return string
     */
    public function getLabelOrder(): string
    {
        return $this->labelOrder;
    }
    /**
     * This is the order of the Shipping label/documents to be generated.
     *
     * @param string $labelOrder
     *
     * @return self
     */
    public function setLabelOrder(string $labelOrder): self
    {
        $this->initialized['labelOrder'] = true;
        $this->labelOrder = $labelOrder;
        return $this;
    }
    /**
     * This object allows the control of label content for customization.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationCustomerSpecifiedDetail
     */
    public function getCustomerSpecifiedDetail(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationCustomerSpecifiedDetail
    {
        return $this->customerSpecifiedDetail;
    }
    /**
     * This object allows the control of label content for customization.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationCustomerSpecifiedDetail $customerSpecifiedDetail
     *
     * @return self
     */
    public function setCustomerSpecifiedDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationCustomerSpecifiedDetail $customerSpecifiedDetail): self
    {
        $this->initialized['customerSpecifiedDetail'] = true;
        $this->customerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationPrintedLabelOrigin
     */
    public function getPrintedLabelOrigin(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationPrintedLabelOrigin
    {
        return $this->printedLabelOrigin;
    }
    /**
     * Specifies the contact and address details of a location.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationPrintedLabelOrigin $printedLabelOrigin
     *
     * @return self
     */
    public function setPrintedLabelOrigin(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecificationPrintedLabelOrigin $printedLabelOrigin): self
    {
        $this->initialized['printedLabelOrigin'] = true;
        $this->printedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    /**
     * Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @return string
     */
    public function getLabelStockType(): string
    {
        return $this->labelStockType;
    }
    /**
     * Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @param string $labelStockType
     *
     * @return self
     */
    public function setLabelStockType(string $labelStockType): self
    {
        $this->initialized['labelStockType'] = true;
        $this->labelStockType = $labelStockType;
        return $this;
    }
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @return string
     */
    public function getLabelRotation(): string
    {
        return $this->labelRotation;
    }
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @param string $labelRotation
     *
     * @return self
     */
    public function setLabelRotation(string $labelRotation): self
    {
        $this->initialized['labelRotation'] = true;
        $this->labelRotation = $labelRotation;
        return $this;
    }
    /**
     * Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @return string
     */
    public function getImageType(): string
    {
        return $this->imageType;
    }
    /**
     * Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(string $imageType): self
    {
        $this->initialized['imageType'] = true;
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @return string
     */
    public function getLabelPrintingOrientation(): string
    {
        return $this->labelPrintingOrientation;
    }
    /**
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * @param string $labelPrintingOrientation
     *
     * @return self
     */
    public function setLabelPrintingOrientation(string $labelPrintingOrientation): self
    {
        $this->initialized['labelPrintingOrientation'] = true;
        $this->labelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    /**
     * Specify whether or not the return deposition is needed.
     *
     * @return bool
     */
    public function getReturnedDispositionDetail(): bool
    {
        return $this->returnedDispositionDetail;
    }
    /**
     * Specify whether or not the return deposition is needed.
     *
     * @param bool $returnedDispositionDetail
     *
     * @return self
     */
    public function setReturnedDispositionDetail(bool $returnedDispositionDetail): self
    {
        $this->initialized['returnedDispositionDetail'] = true;
        $this->returnedDispositionDetail = $returnedDispositionDetail;
        return $this;
    }
}