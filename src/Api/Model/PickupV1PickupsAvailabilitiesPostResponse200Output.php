<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsAvailabilitiesPostResponse200Output extends \ArrayObject
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
     * The time when the PickupAvailability request was processed.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br> 2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code<br> 5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @var string
     */
    protected $requestTimestamp;
    /**
     * The pickup schedule details, such as the carrier, latest available time of pickup, default latest available time, availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, and driver's access to pick up the package.
     *
     * @var list<PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem>
     */
    protected $options;
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @var list<PickupV1PickupsAvailabilitiesPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * The time when the PickupAvailability request was processed.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br> 2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code<br> 5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @return string
     */
    public function getRequestTimestamp(): string
    {
        return $this->requestTimestamp;
    }
    /**
     * The time when the PickupAvailability request was processed.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br> 2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code<br> 5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @param string $requestTimestamp
     *
     * @return self
     */
    public function setRequestTimestamp(string $requestTimestamp): self
    {
        $this->initialized['requestTimestamp'] = true;
        $this->requestTimestamp = $requestTimestamp;
        return $this;
    }
    /**
     * The pickup schedule details, such as the carrier, latest available time of pickup, default latest available time, availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, and driver's access to pick up the package.
     *
     * @return list<PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * The pickup schedule details, such as the carrier, latest available time of pickup, default latest available time, availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, and driver's access to pick up the package.
     *
     * @param list<PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem> $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @return list<PickupV1PickupsAvailabilitiesPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
     *
     * @param list<PickupV1PickupsAvailabilitiesPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}