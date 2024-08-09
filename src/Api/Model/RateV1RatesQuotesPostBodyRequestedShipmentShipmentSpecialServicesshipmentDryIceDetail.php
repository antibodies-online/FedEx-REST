<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail extends \ArrayObject
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
     * These are the weight details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetailTotalWeight
     */
    protected $totalWeight;
    /**
     * This is package count.<br>Example: 12
     *
     * @var int
     */
    protected $packageCount;
    /**
     * These are the weight details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetailTotalWeight
     */
    public function getTotalWeight(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetailTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * These are the weight details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetailTotalWeight $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetailTotalWeight $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * This is package count.<br>Example: 12
     *
     * @return int
     */
    public function getPackageCount(): int
    {
        return $this->packageCount;
    }
    /**
     * This is package count.<br>Example: 12
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