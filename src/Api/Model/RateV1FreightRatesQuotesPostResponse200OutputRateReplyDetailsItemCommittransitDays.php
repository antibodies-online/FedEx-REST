<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemCommittransitDays extends \ArrayObject
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
     * Indicates the number of days the package/shipment is to be in transit.
     *
     * @var string
     */
    protected $description;
    /**
     * This is the code indicating the number of transit days.
     *
     * @var string
     */
    protected $minimumTransitTime;
    /**
     * Indicates the number of days the package/shipment is to be in transit.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicates the number of days the package/shipment is to be in transit.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * This is the code indicating the number of transit days.
     *
     * @return string
     */
    public function getMinimumTransitTime() : string
    {
        return $this->minimumTransitTime;
    }
    /**
     * This is the code indicating the number of transit days.
     *
     * @param string $minimumTransitTime
     *
     * @return self
     */
    public function setMinimumTransitTime(string $minimumTransitTime) : self
    {
        $this->initialized['minimumTransitTime'] = true;
        $this->minimumTransitTime = $minimumTransitTime;
        return $this;
    }
}