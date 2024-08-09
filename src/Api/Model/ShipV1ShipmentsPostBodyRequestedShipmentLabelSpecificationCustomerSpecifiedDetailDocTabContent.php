<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContent extends \ArrayObject
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
     * Indicates the content type of the doc tab.
     *
     * @var string
     */
    protected $docTabContentType;
    /**
     * Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001
     */
    protected $zone001;
    /**
     * It is a doc tab content type which is in barcoded format.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded
     */
    protected $barcoded;
    /**
     * Indicates the content type of the doc tab.
     *
     * @return string
     */
    public function getDocTabContentType(): string
    {
        return $this->docTabContentType;
    }
    /**
     * Indicates the content type of the doc tab.
     *
     * @param string $docTabContentType
     *
     * @return self
     */
    public function setDocTabContentType(string $docTabContentType): self
    {
        $this->initialized['docTabContentType'] = true;
        $this->docTabContentType = $docTabContentType;
        return $this;
    }
    /**
     * Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001
     */
    public function getZone001(): ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001
    {
        return $this->zone001;
    }
    /**
     * Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001 $zone001
     *
     * @return self
     */
    public function setZone001(ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentZone001 $zone001): self
    {
        $this->initialized['zone001'] = true;
        $this->zone001 = $zone001;
        return $this;
    }
    /**
     * It is a doc tab content type which is in barcoded format.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded
     */
    public function getBarcoded(): ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded
    {
        return $this->barcoded;
    }
    /**
     * It is a doc tab content type which is in barcoded format.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded $barcoded
     *
     * @return self
     */
    public function setBarcoded(ShipV1ShipmentsPostBodyRequestedShipmentLabelSpecificationCustomerSpecifiedDetailDocTabContentBarcoded $barcoded): self
    {
        $this->initialized['barcoded'] = true;
        $this->barcoded = $barcoded;
        return $this;
    }
}