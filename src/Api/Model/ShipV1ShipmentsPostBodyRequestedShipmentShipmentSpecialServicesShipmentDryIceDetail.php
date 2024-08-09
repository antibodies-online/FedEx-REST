<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
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
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
     */
    public function getTotalWeight(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * These are the package weight details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight): self
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