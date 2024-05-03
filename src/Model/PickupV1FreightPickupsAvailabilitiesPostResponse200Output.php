<?php

namespace AntibodiesOnline\FedEx\Model;

class PickupV1FreightPickupsAvailabilitiesPostResponse200Output extends \ArrayObject
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
     * Indicates the close time corresponding to the close time type .<br>Example: 12:00:00-05:00
     *
     * @var string
     */
    protected $closeTime;
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @var string
     */
    protected $closeTimeType;
    /**
     * A string used to represent the concept of local time at particular location. The format is hh:mm. The local time format does not contain any representation for the time zone.<br>Example: 19:20
     *
     * @var string
     */
    protected $localTime;
    /**
     * The pickup schedule details, such as the availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, access time and driver's access to pick up the package.
     *
     * @var list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem>
     */
    protected $options;
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates the close time corresponding to the close time type .<br>Example: 12:00:00-05:00
     *
     * @return string
     */
    public function getCloseTime() : string
    {
        return $this->closeTime;
    }
    /**
     * Indicates the close time corresponding to the close time type .<br>Example: 12:00:00-05:00
     *
     * @param string $closeTime
     *
     * @return self
     */
    public function setCloseTime(string $closeTime) : self
    {
        $this->initialized['closeTime'] = true;
        $this->closeTime = $closeTime;
        return $this;
    }
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @return string
     */
    public function getCloseTimeType() : string
    {
        return $this->closeTimeType;
    }
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param string $closeTimeType
     *
     * @return self
     */
    public function setCloseTimeType(string $closeTimeType) : self
    {
        $this->initialized['closeTimeType'] = true;
        $this->closeTimeType = $closeTimeType;
        return $this;
    }
    /**
     * A string used to represent the concept of local time at particular location. The format is hh:mm. The local time format does not contain any representation for the time zone.<br>Example: 19:20
     *
     * @return string
     */
    public function getLocalTime() : string
    {
        return $this->localTime;
    }
    /**
     * A string used to represent the concept of local time at particular location. The format is hh:mm. The local time format does not contain any representation for the time zone.<br>Example: 19:20
     *
     * @param string $localTime
     *
     * @return self
     */
    public function setLocalTime(string $localTime) : self
    {
        $this->initialized['localTime'] = true;
        $this->localTime = $localTime;
        return $this;
    }
    /**
     * The pickup schedule details, such as the availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, access time and driver's access to pick up the package.
     *
     * @return list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * The pickup schedule details, such as the availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, access time and driver's access to pick up the package.
     *
     * @param list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1FreightPickupsAvailabilitiesPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}