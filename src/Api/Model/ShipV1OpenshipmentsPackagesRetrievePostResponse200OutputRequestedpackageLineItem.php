<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItem extends \ArrayObject
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
     * Optional. <br>Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     *
     * @var string
     */
    protected $sequenceNumber;
    /**
     * Indicate the subPackagingType, if you are using your own packaging for the shipment. Use it for all shipments inbound to Canada (CA) and inbound shipments to the U.S. and Puerto Rico (PR) from Canada and Mexico (MX).subPackagingType is mandatory for shipments to Canada.<br>Example: TUBE, CARTON, CONTAINER. etc.<br>Note: If the value is TUBE, a non-machinable surcharge will be applicable for SmartPost shipments.<br><a onclick='loadDocReference("subpackagetypes")'>click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, contact your FedEx representative.
     *
     * @var string
     */
    protected $subPackagingType;
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @var list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * This is the Declared Value of any shipment which represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDeclaredValue
     */
    protected $declaredValue;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemWeight
     */
    protected $weight;
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required when using a Express freight service.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href='https://www.fedex.com/en-us/service-guide.html' target='_blank'>FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDimensions
     */
    protected $dimensions;
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     * @var int
     */
    protected $groupPackageCount;
    /**
     * Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     *
     * @var string
     */
    protected $itemDescriptionForClearance;
    /**
     * Use this object to specify package content details.
     *
     * @var list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemContentRecordItem>
     */
    protected $contentRecord;
    /**
     * This the item description for the package.<br>Note: Item description is required for Email Label return shipments and ground Create tag.<br>Example: Item description<br> Maximum limit is 50 characters
     *
     * @var string
     */
    protected $itemDescription;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices
     */
    protected $packageSpecialServices;
    /**
     * Optional. <br>Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     *
     * @return string
     */
    public function getSequenceNumber(): string
    {
        return $this->sequenceNumber;
    }
    /**
     * Optional. <br>Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
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
     * Indicate the subPackagingType, if you are using your own packaging for the shipment. Use it for all shipments inbound to Canada (CA) and inbound shipments to the U.S. and Puerto Rico (PR) from Canada and Mexico (MX).subPackagingType is mandatory for shipments to Canada.<br>Example: TUBE, CARTON, CONTAINER. etc.<br>Note: If the value is TUBE, a non-machinable surcharge will be applicable for SmartPost shipments.<br><a onclick='loadDocReference("subpackagetypes")'>click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, contact your FedEx representative.
     *
     * @return string
     */
    public function getSubPackagingType(): string
    {
        return $this->subPackagingType;
    }
    /**
     * Indicate the subPackagingType, if you are using your own packaging for the shipment. Use it for all shipments inbound to Canada (CA) and inbound shipments to the U.S. and Puerto Rico (PR) from Canada and Mexico (MX).subPackagingType is mandatory for shipments to Canada.<br>Example: TUBE, CARTON, CONTAINER. etc.<br>Note: If the value is TUBE, a non-machinable surcharge will be applicable for SmartPost shipments.<br><a onclick='loadDocReference("subpackagetypes")'>click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, contact your FedEx representative.
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
     * @return list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * @param list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemCustomerReferencesItem> $customerReferences
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
     * This is the Declared Value of any shipment which represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDeclaredValue
     */
    public function getDeclaredValue(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * This is the Declared Value of any shipment which represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDeclaredValue $declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemWeight
     */
    public function getWeight(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemWeight $weight
     *
     * @return self
     */
    public function setWeight(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required when using a Express freight service.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href='https://www.fedex.com/en-us/service-guide.html' target='_blank'>FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDimensions
     */
    public function getDimensions(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required when using a Express freight service.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href='https://www.fedex.com/en-us/service-guide.html' target='_blank'>FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     * @return int
     */
    public function getGroupPackageCount(): int
    {
        return $this->groupPackageCount;
    }
    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
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
     * Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     *
     * @return string
     */
    public function getItemDescriptionForClearance(): string
    {
        return $this->itemDescriptionForClearance;
    }
    /**
     * Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
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
     * @return list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemContentRecordItem>
     */
    public function getContentRecord(): array
    {
        return $this->contentRecord;
    }
    /**
     * Use this object to specify package content details.
     *
     * @param list<ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemContentRecordItem> $contentRecord
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
     * This the item description for the package.<br>Note: Item description is required for Email Label return shipments and ground Create tag.<br>Example: Item description<br> Maximum limit is 50 characters
     *
     * @return string
     */
    public function getItemDescription(): string
    {
        return $this->itemDescription;
    }
    /**
     * This the item description for the package.<br>Note: Item description is required for Email Label return shipments and ground Create tag.<br>Example: Item description<br> Maximum limit is 50 characters
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
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices
     */
    public function getPackageSpecialServices(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices
    {
        return $this->packageSpecialServices;
    }
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices $packageSpecialServices
     *
     * @return self
     */
    public function setPackageSpecialServices(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemPackageSpecialServices $packageSpecialServices): self
    {
        $this->initialized['packageSpecialServices'] = true;
        $this->packageSpecialServices = $packageSpecialServices;
        return $this;
    }
}