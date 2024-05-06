<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail extends \ArrayObject
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
     * These are the weight details.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
     */
    protected $totalWeight;
    /**
     * Specify dry ice shipment package count.<br>Example: 12
     *
     * @var int
     */
    protected $packageCount;
    /**
     * These are the weight details.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
     */
    public function getTotalWeight() : AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * These are the weight details.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specify dry ice shipment package count.<br>Example: 12
     *
     * @return int
     */
    public function getPackageCount() : int
    {
        return $this->packageCount;
    }
    /**
     * Specify dry ice shipment package count.<br>Example: 12
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount) : self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
}