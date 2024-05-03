<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItem extends \ArrayObject
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
     * This is package sequence number. No negative value or decimals are allowed.<br>Example: 256
     *
     * @var int
     */
    protected $sequenceNumber;
    /**
     * Package-level data required for labeling and/or movement.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail
     */
    protected $operationalDetail;
    /**
     * It specifies the signature option applied, to allow cases in which the value requested conflicted with other service features in the shipment. <br>Example: DIRECT
     *
     * @var string
     */
    protected $signatureOption;
    /**
     * Tracking details for the package.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemTrackingIdsItem>
     */
    protected $trackingIds;
    /**
     * This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     *
     * @var int
     */
    protected $groupNumber;
    /**
     * Indicates the oversize classification.<br>Example: OVERSIZE_1
     *
     * @var string
     */
    protected $oversizeClass;
    /**
     * This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating
     */
    protected $packageRating;
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. Includes weight and units. This element is required when SpecialServiceType DRY_ICE is present in the SpecialServiceTypes collection at the package level.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight
     */
    protected $dryIceWeight;
    /**
     * Complete package-level hazardous commodity information for a single package.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail
     */
    protected $hazardousPackageDetail;
    /**
     * This is package sequence number. No negative value or decimals are allowed.<br>Example: 256
     *
     * @return int
     */
    public function getSequenceNumber() : int
    {
        return $this->sequenceNumber;
    }
    /**
     * This is package sequence number. No negative value or decimals are allowed.<br>Example: 256
     *
     * @param int $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(int $sequenceNumber) : self
    {
        $this->initialized['sequenceNumber'] = true;
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Package-level data required for labeling and/or movement.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail
     */
    public function getOperationalDetail() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail
    {
        return $this->operationalDetail;
    }
    /**
     * Package-level data required for labeling and/or movement.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail $operationalDetail
     *
     * @return self
     */
    public function setOperationalDetail(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemOperationalDetail $operationalDetail) : self
    {
        $this->initialized['operationalDetail'] = true;
        $this->operationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * It specifies the signature option applied, to allow cases in which the value requested conflicted with other service features in the shipment. <br>Example: DIRECT
     *
     * @return string
     */
    public function getSignatureOption() : string
    {
        return $this->signatureOption;
    }
    /**
     * It specifies the signature option applied, to allow cases in which the value requested conflicted with other service features in the shipment. <br>Example: DIRECT
     *
     * @param string $signatureOption
     *
     * @return self
     */
    public function setSignatureOption(string $signatureOption) : self
    {
        $this->initialized['signatureOption'] = true;
        $this->signatureOption = $signatureOption;
        return $this;
    }
    /**
     * Tracking details for the package.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemTrackingIdsItem>
     */
    public function getTrackingIds() : array
    {
        return $this->trackingIds;
    }
    /**
     * Tracking details for the package.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemTrackingIdsItem> $trackingIds
     *
     * @return self
     */
    public function setTrackingIds(array $trackingIds) : self
    {
        $this->initialized['trackingIds'] = true;
        $this->trackingIds = $trackingIds;
        return $this;
    }
    /**
     * This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     *
     * @return int
     */
    public function getGroupNumber() : int
    {
        return $this->groupNumber;
    }
    /**
     * This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     *
     * @param int $groupNumber
     *
     * @return self
     */
    public function setGroupNumber(int $groupNumber) : self
    {
        $this->initialized['groupNumber'] = true;
        $this->groupNumber = $groupNumber;
        return $this;
    }
    /**
     * Indicates the oversize classification.<br>Example: OVERSIZE_1
     *
     * @return string
     */
    public function getOversizeClass() : string
    {
        return $this->oversizeClass;
    }
    /**
     * Indicates the oversize classification.<br>Example: OVERSIZE_1
     *
     * @param string $oversizeClass
     *
     * @return self
     */
    public function setOversizeClass(string $oversizeClass) : self
    {
        $this->initialized['oversizeClass'] = true;
        $this->oversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating
     */
    public function getPackageRating() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating
    {
        return $this->packageRating;
    }
    /**
     * This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating $packageRating
     *
     * @return self
     */
    public function setPackageRating(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRating $packageRating) : self
    {
        $this->initialized['packageRating'] = true;
        $this->packageRating = $packageRating;
        return $this;
    }
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. Includes weight and units. This element is required when SpecialServiceType DRY_ICE is present in the SpecialServiceTypes collection at the package level.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight
     */
    public function getDryIceWeight() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. Includes weight and units. This element is required when SpecialServiceType DRY_ICE is present in the SpecialServiceTypes collection at the package level.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Complete package-level hazardous commodity information for a single package.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail
     */
    public function getHazardousPackageDetail() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail
    {
        return $this->hazardousPackageDetail;
    }
    /**
     * Complete package-level hazardous commodity information for a single package.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail $hazardousPackageDetail
     *
     * @return self
     */
    public function setHazardousPackageDetail(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetail $hazardousPackageDetail) : self
    {
        $this->initialized['hazardousPackageDetail'] = true;
        $this->hazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
}