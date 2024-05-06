<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail extends \ArrayObject
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
     * 
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight
     */
    protected $totalWeight;
    /**
     * 
     *
     * @var int
     */
    protected $packageCount;
    /**
     * 
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight
     */
    public function getTotalWeight() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * 
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetailtotalWeight $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPackageCount() : int
    {
        return $this->packageCount;
    }
    /**
     * 
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