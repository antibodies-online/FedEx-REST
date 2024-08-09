<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBody extends \ArrayObject
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
     * The associated account number, which is  invoiced for the freight pickup.
     *
     * @var mixed
     */
    protected $associatedAccountNumber;
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @var mixed
     */
    protected $originDetail;
    /**
     * The total weight of the packages for the pickup. Unit of measure is LB and KG.
     *
     * @var list<PickupV1FreightPickupsPostBodyTotalWeightItem>
     */
    protected $totalWeight;
    /**
     * The total number of packages for the pickup.<br> Example: 5
     *
     * @var int
     */
    protected $packageCount;
    /**
     * This is a placeholder for any message to be passed to the FedEx pickup. courier.<br> Example: Please ring bell at loading dock.
     *
     * @var string
     */
    protected $remarks;
    /**
     * Describes the country relationship among the shipments being picked up.<br>'DOMESTIC' indicates intra-country shipping; origin and destination country are the same.<br>'INTERNATIONAL' indicates inter-country shipping; origin and destination countries are different.<br>Not applicable for FedEx Ground shipments<br>Example: DOMESTIC
     *
     * @var string
     */
    protected $countryRelationships;
    /**
     * This is a tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: XXXX0365XXXX
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Description of the commodity being shipped. <br>Example:This field contains CommodityDescription 
     *
     * @var string
     */
    protected $commodityDescription;
    /**
     * This provides the Freight LTL pickup detailed information.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetail
     */
    protected $freightPickupDetail;
    /**
     * The number of oversize packages that are tendered to FedEx Ground.
     *
     * @var int
     */
    protected $oversizePackageCount;
    /**
     * 
     *
     * @var mixed
     */
    protected $pickupNotificationDetail;
    /**
     * The associated account number, which is  invoiced for the freight pickup.
     *
     * @return mixed
     */
    public function getAssociatedAccountNumber()
    {
        return $this->associatedAccountNumber;
    }
    /**
     * The associated account number, which is  invoiced for the freight pickup.
     *
     * @param mixed $associatedAccountNumber
     *
     * @return self
     */
    public function setAssociatedAccountNumber($associatedAccountNumber): self
    {
        $this->initialized['associatedAccountNumber'] = true;
        $this->associatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @return mixed
     */
    public function getOriginDetail()
    {
        return $this->originDetail;
    }
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @param mixed $originDetail
     *
     * @return self
     */
    public function setOriginDetail($originDetail): self
    {
        $this->initialized['originDetail'] = true;
        $this->originDetail = $originDetail;
        return $this;
    }
    /**
     * The total weight of the packages for the pickup. Unit of measure is LB and KG.
     *
     * @return list<PickupV1FreightPickupsPostBodyTotalWeightItem>
     */
    public function getTotalWeight(): array
    {
        return $this->totalWeight;
    }
    /**
     * The total weight of the packages for the pickup. Unit of measure is LB and KG.
     *
     * @param list<PickupV1FreightPickupsPostBodyTotalWeightItem> $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(array $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * The total number of packages for the pickup.<br> Example: 5
     *
     * @return int
     */
    public function getPackageCount(): int
    {
        return $this->packageCount;
    }
    /**
     * The total number of packages for the pickup.<br> Example: 5
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount): self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * This is a placeholder for any message to be passed to the FedEx pickup. courier.<br> Example: Please ring bell at loading dock.
     *
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->remarks;
    }
    /**
     * This is a placeholder for any message to be passed to the FedEx pickup. courier.<br> Example: Please ring bell at loading dock.
     *
     * @param string $remarks
     *
     * @return self
     */
    public function setRemarks(string $remarks): self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Describes the country relationship among the shipments being picked up.<br>'DOMESTIC' indicates intra-country shipping; origin and destination country are the same.<br>'INTERNATIONAL' indicates inter-country shipping; origin and destination countries are different.<br>Not applicable for FedEx Ground shipments<br>Example: DOMESTIC
     *
     * @return string
     */
    public function getCountryRelationships(): string
    {
        return $this->countryRelationships;
    }
    /**
     * Describes the country relationship among the shipments being picked up.<br>'DOMESTIC' indicates intra-country shipping; origin and destination country are the same.<br>'INTERNATIONAL' indicates inter-country shipping; origin and destination countries are different.<br>Not applicable for FedEx Ground shipments<br>Example: DOMESTIC
     *
     * @param string $countryRelationships
     *
     * @return self
     */
    public function setCountryRelationships(string $countryRelationships): self
    {
        $this->initialized['countryRelationships'] = true;
        $this->countryRelationships = $countryRelationships;
        return $this;
    }
    /**
     * This is a tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: XXXX0365XXXX
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: XXXX0365XXXX
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Description of the commodity being shipped. <br>Example:This field contains CommodityDescription 
     *
     * @return string
     */
    public function getCommodityDescription(): string
    {
        return $this->commodityDescription;
    }
    /**
     * Description of the commodity being shipped. <br>Example:This field contains CommodityDescription 
     *
     * @param string $commodityDescription
     *
     * @return self
     */
    public function setCommodityDescription(string $commodityDescription): self
    {
        $this->initialized['commodityDescription'] = true;
        $this->commodityDescription = $commodityDescription;
        return $this;
    }
    /**
     * This provides the Freight LTL pickup detailed information.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetail
     */
    public function getFreightPickupDetail(): PickupV1FreightPickupsPostBodyFreightPickupDetail
    {
        return $this->freightPickupDetail;
    }
    /**
     * This provides the Freight LTL pickup detailed information.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetail $freightPickupDetail
     *
     * @return self
     */
    public function setFreightPickupDetail(PickupV1FreightPickupsPostBodyFreightPickupDetail $freightPickupDetail): self
    {
        $this->initialized['freightPickupDetail'] = true;
        $this->freightPickupDetail = $freightPickupDetail;
        return $this;
    }
    /**
     * The number of oversize packages that are tendered to FedEx Ground.
     *
     * @return int
     */
    public function getOversizePackageCount(): int
    {
        return $this->oversizePackageCount;
    }
    /**
     * The number of oversize packages that are tendered to FedEx Ground.
     *
     * @param int $oversizePackageCount
     *
     * @return self
     */
    public function setOversizePackageCount(int $oversizePackageCount): self
    {
        $this->initialized['oversizePackageCount'] = true;
        $this->oversizePackageCount = $oversizePackageCount;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPickupNotificationDetail()
    {
        return $this->pickupNotificationDetail;
    }
    /**
     * 
     *
     * @param mixed $pickupNotificationDetail
     *
     * @return self
     */
    public function setPickupNotificationDetail($pickupNotificationDetail): self
    {
        $this->initialized['pickupNotificationDetail'] = true;
        $this->pickupNotificationDetail = $pickupNotificationDetail;
        return $this;
    }
}