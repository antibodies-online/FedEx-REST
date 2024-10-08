<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItem extends \ArrayObject
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
     * Specifies the FedEx transportation carrier for this pickup option.
     *
     * @var string
     */
    protected $carrier;
    /**
     * Returns true indicates this pickup option is available and false indicates pickup option is not available.
     *
     * @var bool
     */
    protected $available;
    /**
     * Identifies the date (in the pickup postal code's time zone) to which this pickup schedule option refers.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     *
     * @var string
     */
    protected $pickupDate;
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @var string
     */
    protected $cutOffTime;
    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime
     */
    protected $accessTime;
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @var bool
     */
    protected $residentialAvailable;
    /**
     * Indicates the scheduled day.
     *
     * @var string
     */
    protected $scheduleDay;
    /**
     * Specifies the FedEx transportation carrier for this pickup option.
     *
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }
    /**
     * Specifies the FedEx transportation carrier for this pickup option.
     *
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(string $carrier): self
    {
        $this->initialized['carrier'] = true;
        $this->carrier = $carrier;
        return $this;
    }
    /**
     * Returns true indicates this pickup option is available and false indicates pickup option is not available.
     *
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }
    /**
     * Returns true indicates this pickup option is available and false indicates pickup option is not available.
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * Identifies the date (in the pickup postal code's time zone) to which this pickup schedule option refers.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     *
     * @return string
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }
    /**
     * Identifies the date (in the pickup postal code's time zone) to which this pickup schedule option refers.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     *
     * @param string $pickupDate
     *
     * @return self
     */
    public function setPickupDate(string $pickupDate): self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @return string
     */
    public function getCutOffTime(): string
    {
        return $this->cutOffTime;
    }
    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * @param string $cutOffTime
     *
     * @return self
     */
    public function setCutOffTime(string $cutOffTime): self
    {
        $this->initialized['cutOffTime'] = true;
        $this->cutOffTime = $cutOffTime;
        return $this;
    }
    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime
     */
    public function getAccessTime(): PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime
    {
        return $this->accessTime;
    }
    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime $accessTime
     *
     * @return self
     */
    public function setAccessTime(PickupV1FreightPickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime $accessTime): self
    {
        $this->initialized['accessTime'] = true;
        $this->accessTime = $accessTime;
        return $this;
    }
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @return bool
     */
    public function getResidentialAvailable(): bool
    {
        return $this->residentialAvailable;
    }
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param bool $residentialAvailable
     *
     * @return self
     */
    public function setResidentialAvailable(bool $residentialAvailable): self
    {
        $this->initialized['residentialAvailable'] = true;
        $this->residentialAvailable = $residentialAvailable;
        return $this;
    }
    /**
     * Indicates the scheduled day.
     *
     * @return string
     */
    public function getScheduleDay(): string
    {
        return $this->scheduleDay;
    }
    /**
     * Indicates the scheduled day.
     *
     * @param string $scheduleDay
     *
     * @return self
     */
    public function setScheduleDay(string $scheduleDay): self
    {
        $this->initialized['scheduleDay'] = true;
        $this->scheduleDay = $scheduleDay;
        return $this;
    }
}