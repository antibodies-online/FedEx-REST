<?php

namespace AntibodiesOnline\FedEx\Model;

class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime extends \ArrayObject
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
     * This is the minimum time window in hours that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @var int
     */
    protected $hours;
    /**
     * This is the minimum time window in minutes that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @var int
     */
    protected $minutes;
    /**
     * This is the minimum time window in hours that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @return int
     */
    public function getHours() : int
    {
        return $this->hours;
    }
    /**
     * This is the minimum time window in hours that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @param int $hours
     *
     * @return self
     */
    public function setHours(int $hours) : self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;
        return $this;
    }
    /**
     * This is the minimum time window in minutes that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @return int
     */
    public function getMinutes() : int
    {
        return $this->minutes;
    }
    /**
     * This is the minimum time window in minutes that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     * @param int $minutes
     *
     * @return self
     */
    public function setMinutes(int $minutes) : self
    {
        $this->initialized['minutes'] = true;
        $this->minutes = $minutes;
        return $this;
    }
}