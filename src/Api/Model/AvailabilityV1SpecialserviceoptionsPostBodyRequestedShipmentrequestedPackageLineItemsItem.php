<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem extends \ArrayObject
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
     * Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @var string
     */
    protected $physicalPackaging;
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
     * These are additional customer reference data for commercial invoice.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Specify in details the contents of the package.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemContentRecord
     */
    protected $contentRecord;
    /**
     * This is the Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDeclaredValue
     */
    protected $declaredValue;
    /**
     * These are the weight details.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemWeight
     */
    protected $weight;
    /**
     * Indicate the dimensions of the package. <br>Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer FedEx Service Guide for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions
     */
    protected $dimensions;
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices
     */
    protected $packageSpecialServices;
    /**
     * Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @return string
     */
    public function getPhysicalPackaging(): string
    {
        return $this->physicalPackaging;
    }
    /**
     * Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
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
     * These are additional customer reference data for commercial invoice.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * These are additional customer reference data for commercial invoice.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemCustomerReferencesItem> $customerReferences
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
     * Specify in details the contents of the package.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemContentRecord
     */
    public function getContentRecord(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemContentRecord
    {
        return $this->contentRecord;
    }
    /**
     * Specify in details the contents of the package.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemContentRecord $contentRecord
     *
     * @return self
     */
    public function setContentRecord(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemContentRecord $contentRecord): self
    {
        $this->initialized['contentRecord'] = true;
        $this->contentRecord = $contentRecord;
        return $this;
    }
    /**
     * This is the Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDeclaredValue
     */
    public function getDeclaredValue(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * This is the Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDeclaredValue $declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * These are the weight details.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemWeight
     */
    public function getWeight(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemWeight
    {
        return $this->weight;
    }
    /**
     * These are the weight details.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicate the dimensions of the package. <br>Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer FedEx Service Guide for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions
     */
    public function getDimensions(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Indicate the dimensions of the package. <br>Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer FedEx Service Guide for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices
     */
    public function getPackageSpecialServices(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices
    {
        return $this->packageSpecialServices;
    }
    /**
     * These are special services that are available at the package level for some or all service types.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices
     *
     * @return self
     */
    public function setPackageSpecialServices(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItemPackageSpecialServices $packageSpecialServices): self
    {
        $this->initialized['packageSpecialServices'] = true;
        $this->packageSpecialServices = $packageSpecialServices;
        return $this;
    }
}