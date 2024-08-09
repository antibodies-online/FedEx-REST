<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem extends \ArrayObject
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
     * Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.    
     *
     * @var string
     */
    protected $sequenceNumber;
    /**
     * This is a sub package type for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a>
     *
     * @var string
     */
    protected $subPackagingType;
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
     */
    protected $declaredValue;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight
     */
    protected $weight;
    /**
     * Required. <br>The dimensions of the package; length, width & height.  All three dimensions must be indicated. Dimensions are required with all FedEx Freight Services like "INTERNATIONAL_PRIORITY_FREIGHT" and "INTERNATIONAL_ECONOMY_FREIGHT"
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions
     */
    protected $dimensions;
    /**
     * Specification of handling-unit packaging for this commodity or class line.<br>Example: class line
     *
     * @var string
     */
    protected $physicalPackaging;
    /**
     * Used only with package groups as a count of packages within a group of identical packages. The package count added to existing package count on the shipment cannot exceed Open Ship package limit<br>Example: 25
     *
     * @var int
     */
    protected $groupPackageCount;
    /**
     * Conditional<br>This is required for intra-UAE. Optional for intra-EU.PackageOption, ServiceOption ignore this field.
     *
     * @var string
     */
    protected $itemDescriptionForClearance;
    /**
     * Use this object to specify package content details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    protected $contentRecord;
    /**
     * Required for Email Label return shipments.<br> This is the item description for the package.<br>Example: item description for the package
     *
     * @var string
     */
    protected $itemDescription;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * Indicates the associated freight line item detail.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem>
     */
    protected $associatedFreightLineItems;
    /**
     * Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.    
     *
     * @return string
     */
    public function getSequenceNumber(): string
    {
        return $this->sequenceNumber;
    }
    /**
     * Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.    
     *
     * @param string $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(string $sequenceNumber): self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * This is a sub package type for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a>
     *
     * @return string
     */
    public function getSubPackagingType(): string
    {
        return $this->subPackagingType;
    }
    /**
     * This is a sub package type for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a>
     *
     * @param string $subPackagingType
     *
     * @return self
     */
    public function setSubPackagingType(string $subPackagingType): self
    {
        $this->initialized['subPackagingType'] = true;
        $this->subPackagingType = $subPackagingType;
        return $this;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemCustomerReferencesItem> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
     */
    public function getDeclaredValue(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * Specifies taxes or miscellaneous charge.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDeclaredValue $declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight
     */
    public function getWeight(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Required. <br>The dimensions of the package; length, width & height.  All three dimensions must be indicated. Dimensions are required with all FedEx Freight Services like "INTERNATIONAL_PRIORITY_FREIGHT" and "INTERNATIONAL_ECONOMY_FREIGHT"
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions
     */
    public function getDimensions(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Required. <br>The dimensions of the package; length, width & height.  All three dimensions must be indicated. Dimensions are required with all FedEx Freight Services like "INTERNATIONAL_PRIORITY_FREIGHT" and "INTERNATIONAL_ECONOMY_FREIGHT"
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Specification of handling-unit packaging for this commodity or class line.<br>Example: class line
     *
     * @return string
     */
    public function getPhysicalPackaging(): string
    {
        return $this->physicalPackaging;
    }
    /**
     * Specification of handling-unit packaging for this commodity or class line.<br>Example: class line
     *
     * @param string $physicalPackaging
     *
     * @return self
     */
    public function setPhysicalPackaging(string $physicalPackaging): self
    {
        $this->initialized['physicalPackaging'] = true;
        $this->physicalPackaging = $physicalPackaging;
        return $this;
    }
    /**
     * Used only with package groups as a count of packages within a group of identical packages. The package count added to existing package count on the shipment cannot exceed Open Ship package limit<br>Example: 25
     *
     * @return int
     */
    public function getGroupPackageCount(): int
    {
        return $this->groupPackageCount;
    }
    /**
     * Used only with package groups as a count of packages within a group of identical packages. The package count added to existing package count on the shipment cannot exceed Open Ship package limit<br>Example: 25
     *
     * @param int $groupPackageCount
     *
     * @return self
     */
    public function setGroupPackageCount(int $groupPackageCount): self
    {
        $this->initialized['groupPackageCount'] = true;
        $this->groupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Conditional<br>This is required for intra-UAE. Optional for intra-EU.PackageOption, ServiceOption ignore this field.
     *
     * @return string
     */
    public function getItemDescriptionForClearance(): string
    {
        return $this->itemDescriptionForClearance;
    }
    /**
     * Conditional<br>This is required for intra-UAE. Optional for intra-EU.PackageOption, ServiceOption ignore this field.
     *
     * @param string $itemDescriptionForClearance
     *
     * @return self
     */
    public function setItemDescriptionForClearance(string $itemDescriptionForClearance): self
    {
        $this->initialized['itemDescriptionForClearance'] = true;
        $this->itemDescriptionForClearance = $itemDescriptionForClearance;
        return $this;
    }
    /**
     * Use this object to specify package content details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem>
     */
    public function getContentRecord(): array
    {
        return $this->contentRecord;
    }
    /**
     * Use this object to specify package content details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemContentRecordItem> $contentRecord
     *
     * @return self
     */
    public function setContentRecord(array $contentRecord): self
    {
        $this->initialized['contentRecord'] = true;
        $this->contentRecord = $contentRecord;
        return $this;
    }
    /**
     * Required for Email Label return shipments.<br> This is the item description for the package.<br>Example: item description for the package
     *
     * @return string
     */
    public function getItemDescription(): string
    {
        return $this->itemDescription;
    }
    /**
     * Required for Email Label return shipments.<br> This is the item description for the package.<br>Example: item description for the package
     *
     * @param string $itemDescription
     *
     * @return self
     */
    public function setItemDescription(string $itemDescription): self
    {
        $this->initialized['itemDescription'] = true;
        $this->itemDescription = $itemDescription;
        return $this;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Indicates the associated freight line item detail.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem>
     */
    public function getAssociatedFreightLineItems(): array
    {
        return $this->associatedFreightLineItems;
    }
    /**
     * Indicates the associated freight line item detail.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItemAssociatedFreightLineItemsItem> $associatedFreightLineItems
     *
     * @return self
     */
    public function setAssociatedFreightLineItems(array $associatedFreightLineItems): self
    {
        $this->initialized['associatedFreightLineItems'] = true;
        $this->associatedFreightLineItems = $associatedFreightLineItems;
        return $this;
    }
}