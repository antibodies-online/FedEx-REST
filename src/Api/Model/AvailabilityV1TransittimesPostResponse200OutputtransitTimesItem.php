<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostResponse200OutputtransitTimesItem extends \ArrayObject
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
     * Specifies the details regarding transit times.
     *
     * @var list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem>
     */
    protected $transitTimeDetails;
    /**
     * Specifies the details regarding transit times.
     *
     * @return list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem>
     */
    public function getTransitTimeDetails() : array
    {
        return $this->transitTimeDetails;
    }
    /**
     * Specifies the details regarding transit times.
     *
     * @param list<AvailabilityV1TransittimesPostResponse200OutputtransitTimesItemTransitTimeDetailsItem> $transitTimeDetails
     *
     * @return self
     */
    public function setTransitTimeDetails(array $transitTimeDetails) : self
    {
        $this->initialized['transitTimeDetails'] = true;
        $this->transitTimeDetails = $transitTimeDetails;
        return $this;
    }
}