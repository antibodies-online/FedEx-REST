<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail extends \ArrayObject
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
     * Specify the commodity details.
     *
     * @var list<AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    protected $commodities;
    /**
     * Specify the commodity details.
     *
     * @return list<AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem>
     */
    public function getCommodities() : array
    {
        return $this->commodities;
    }
    /**
     * Specify the commodity details.
     *
     * @param list<AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItem> $commodities
     *
     * @return self
     */
    public function setCommodities(array $commodities) : self
    {
        $this->initialized['commodities'] = true;
        $this->commodities = $commodities;
        return $this;
    }
}