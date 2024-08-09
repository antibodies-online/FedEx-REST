<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail extends \ArrayObject
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
     * These are the package weight details.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
     */
    protected $totalWeight;
    /**
     * Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     *
     * @var int
     */
    protected $packageCount;
    /**
     * These are the package weight details.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
     */
    public function getTotalWeight(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * These are the package weight details.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     *
     * @return int
     */
    public function getPackageCount(): int
    {
        return $this->packageCount;
    }
    /**
     * Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
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
}