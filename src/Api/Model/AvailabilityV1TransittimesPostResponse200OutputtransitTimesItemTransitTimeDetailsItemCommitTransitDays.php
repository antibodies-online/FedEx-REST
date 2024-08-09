<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItemCommitTransitDays extends \ArrayObject
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
     * Specifies the number of days the package/shipment is to be in transit.
     *
     * @var string
     */
    protected $description;
    /**
     * This is a code indicating the number of transit days available.
     *
     * @var string
     */
    protected $minimumTransitTime;
    /**
     * 
     *
     * @var string
     */
    protected $maximumTransitTime;
    /**
     * Specifies the number of days the package/shipment is to be in transit.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Specifies the number of days the package/shipment is to be in transit.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * This is a code indicating the number of transit days available.
     *
     * @return string
     */
    public function getMinimumTransitTime(): string
    {
        return $this->minimumTransitTime;
    }
    /**
     * This is a code indicating the number of transit days available.
     *
     * @param string $minimumTransitTime
     *
     * @return self
     */
    public function setMinimumTransitTime(string $minimumTransitTime): self
    {
        $this->initialized['minimumTransitTime'] = true;
        $this->minimumTransitTime = $minimumTransitTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMaximumTransitTime(): string
    {
        return $this->maximumTransitTime;
    }
    /**
     * 
     *
     * @param string $maximumTransitTime
     *
     * @return self
     */
    public function setMaximumTransitTime(string $maximumTransitTime): self
    {
        $this->initialized['maximumTransitTime'] = true;
        $this->maximumTransitTime = $maximumTransitTime;
        return $this;
    }
}