<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItem extends \ArrayObject
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
     * Specifies the FedEx transportation carrier for the pickup option.
     *
     * @var string
     */
    protected $carrier;
    /**
     * Indicates the availability of pickup option.If the value is true, it indicates the pickup option is available. If the value is false, it indicates pickup option is not available.
     *
     * @var bool
     */
    protected $available;
    /**
     * Indicates the date (in the pickup postal code's time zone)which refers to the pickup schedule option.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20.
     *
     * @var string
     */
    protected $pickupDate;
    /**
     * Specifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. <br> Format:  HH:MM:SS <br> Example: 18:30:00.
     *
     * @var string
     */
    protected $cutOffTime;
    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     *
     * @var PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime
     */
    protected $accessTime;
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @var bool
     */
    protected $residentialAvailable;
    /**
     * Describes the country relationship among the shipments.DOMESTIC indicates intra-country shipping and cut off times.<br> INTERNATIONAL indicates inter-country shipping and cut off times.<br>Cut off times may vary for DOMESTIC and INTERNATIONAL.
     *
     * @var string
     */
    protected $countryRelationship;
    /**
     * Indicates scheduled pickup day of the week.
     *
     * @var string
     */
    protected $scheduleDay;
    /**
     * The default ready time for the shipment to be picked up. FedEx will assume the shipment is ready for pickup at this time unless otherwise indicated on the 'CreatePickup' Request. Format:HH:MM:SS <br> Example: 14:00:00.
     *
     * @var string
     */
    protected $defaultReadyTime;
    /**
     * The default latest time for the shipment to be picked up.<br>Format:HH:MM:SS <br> Example: 19:00:00.
     */
    protected $defaultLatestTimeOptions;
    /**
     * Identifies the early cut-off time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00.
     *
     * @var string
     */
    protected $earlyCutOffTime;
    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     *
     * @var PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime
     */
    protected $earlyAccessTime;
    /**
     * The location from where the package will be picked up <br> Example: PITA.
     *
     * @var string
     */
    protected $earlyPickupLocationId;
    /**
     * The ReadyTimeOptions indicates the possible ready time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 11:00:00, 11:30:00 <br>Note:Based on the cutOffTimes provided readyTimeOptions are returned.
     *
     * @var list<string>
     */
    protected $readyTimeOptions;
    /**
     * The LatestTimeOptions indicates the possible latest time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 12:00:00,12:30:00,13:00:00,13:30:00....23:59:00<br> Note:LatestTimeOptions are return till endoftheday timings.
     *
     * @var list<string>
     */
    protected $latestTimeOptions;

    /**
     * Specifies the FedEx transportation carrier for the pickup option.
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * Specifies the FedEx transportation carrier for the pickup option.
     */
    public function setCarrier(string $carrier): self
    {
        $this->initialized['carrier'] = true;
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Indicates the availability of pickup option.If the value is true, it indicates the pickup option is available. If the value is false, it indicates pickup option is not available.
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }

    /**
     * Indicates the availability of pickup option.If the value is true, it indicates the pickup option is available. If the value is false, it indicates pickup option is not available.
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    /**
     * Indicates the date (in the pickup postal code's time zone)which refers to the pickup schedule option.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20.
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }

    /**
     * Indicates the date (in the pickup postal code's time zone)which refers to the pickup schedule option.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20.
     */
    public function setPickupDate(string $pickupDate): self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * Specifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. <br> Format:  HH:MM:SS <br> Example: 18:30:00.
     */
    public function getCutOffTime(): string
    {
        return $this->cutOffTime;
    }

    /**
     * Specifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. <br> Format:  HH:MM:SS <br> Example: 18:30:00.
     */
    public function setCutOffTime(string $cutOffTime): self
    {
        $this->initialized['cutOffTime'] = true;
        $this->cutOffTime = $cutOffTime;

        return $this;
    }

    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     */
    public function getAccessTime(): PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime
    {
        return $this->accessTime;
    }

    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     */
    public function setAccessTime(PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemAccessTime $accessTime): self
    {
        $this->initialized['accessTime'] = true;
        $this->accessTime = $accessTime;

        return $this;
    }

    /**
     * Indicates whether residential pickup is available for the requested postal code.
     */
    public function getResidentialAvailable(): bool
    {
        return $this->residentialAvailable;
    }

    /**
     * Indicates whether residential pickup is available for the requested postal code.
     */
    public function setResidentialAvailable(bool $residentialAvailable): self
    {
        $this->initialized['residentialAvailable'] = true;
        $this->residentialAvailable = $residentialAvailable;

        return $this;
    }

    /**
     * Describes the country relationship among the shipments.DOMESTIC indicates intra-country shipping and cut off times.<br> INTERNATIONAL indicates inter-country shipping and cut off times.<br>Cut off times may vary for DOMESTIC and INTERNATIONAL.
     */
    public function getCountryRelationship(): string
    {
        return $this->countryRelationship;
    }

    /**
     * Describes the country relationship among the shipments.DOMESTIC indicates intra-country shipping and cut off times.<br> INTERNATIONAL indicates inter-country shipping and cut off times.<br>Cut off times may vary for DOMESTIC and INTERNATIONAL.
     */
    public function setCountryRelationship(string $countryRelationship): self
    {
        $this->initialized['countryRelationship'] = true;
        $this->countryRelationship = $countryRelationship;

        return $this;
    }

    /**
     * Indicates scheduled pickup day of the week.
     */
    public function getScheduleDay(): string
    {
        return $this->scheduleDay;
    }

    /**
     * Indicates scheduled pickup day of the week.
     */
    public function setScheduleDay(string $scheduleDay): self
    {
        $this->initialized['scheduleDay'] = true;
        $this->scheduleDay = $scheduleDay;

        return $this;
    }

    /**
     * The default ready time for the shipment to be picked up. FedEx will assume the shipment is ready for pickup at this time unless otherwise indicated on the 'CreatePickup' Request. Format:HH:MM:SS <br> Example: 14:00:00.
     */
    public function getDefaultReadyTime(): string
    {
        return $this->defaultReadyTime;
    }

    /**
     * The default ready time for the shipment to be picked up. FedEx will assume the shipment is ready for pickup at this time unless otherwise indicated on the 'CreatePickup' Request. Format:HH:MM:SS <br> Example: 14:00:00.
     */
    public function setDefaultReadyTime(string $defaultReadyTime): self
    {
        $this->initialized['defaultReadyTime'] = true;
        $this->defaultReadyTime = $defaultReadyTime;

        return $this;
    }

    /**
     * The default latest time for the shipment to be picked up.<br>Format:HH:MM:SS <br> Example: 19:00:00.
     */
    public function getDefaultLatestTimeOptions()
    {
        return $this->defaultLatestTimeOptions;
    }

    /**
     * The default latest time for the shipment to be picked up.<br>Format:HH:MM:SS <br> Example: 19:00:00.
     */
    public function setDefaultLatestTimeOptions($defaultLatestTimeOptions): self
    {
        $this->initialized['defaultLatestTimeOptions'] = true;
        $this->defaultLatestTimeOptions = $defaultLatestTimeOptions;

        return $this;
    }

    /**
     * Identifies the early cut-off time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00.
     */
    public function getEarlyCutOffTime(): string
    {
        return $this->earlyCutOffTime;
    }

    /**
     * Identifies the early cut-off time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00.
     */
    public function setEarlyCutOffTime(string $earlyCutOffTime): self
    {
        $this->initialized['earlyCutOffTime'] = true;
        $this->earlyCutOffTime = $earlyCutOffTime;

        return $this;
    }

    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     */
    public function getEarlyAccessTime(): PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime
    {
        return $this->earlyAccessTime;
    }

    /**
     * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30.
     */
    public function setEarlyAccessTime(PickupV1PickupsAvailabilitiesPostResponse200OutputOptionsItemEarlyAccessTime $earlyAccessTime): self
    {
        $this->initialized['earlyAccessTime'] = true;
        $this->earlyAccessTime = $earlyAccessTime;

        return $this;
    }

    /**
     * The location from where the package will be picked up <br> Example: PITA.
     */
    public function getEarlyPickupLocationId(): string
    {
        return $this->earlyPickupLocationId;
    }

    /**
     * The location from where the package will be picked up <br> Example: PITA.
     */
    public function setEarlyPickupLocationId(string $earlyPickupLocationId): self
    {
        $this->initialized['earlyPickupLocationId'] = true;
        $this->earlyPickupLocationId = $earlyPickupLocationId;

        return $this;
    }

    /**
     * The ReadyTimeOptions indicates the possible ready time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 11:00:00, 11:30:00 <br>Note:Based on the cutOffTimes provided readyTimeOptions are returned.
     *
     * @return list<string>
     */
    public function getReadyTimeOptions(): array
    {
        return $this->readyTimeOptions;
    }

    /**
     * The ReadyTimeOptions indicates the possible ready time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 11:00:00, 11:30:00 <br>Note:Based on the cutOffTimes provided readyTimeOptions are returned.
     *
     * @param list<string> $readyTimeOptions
     */
    public function setReadyTimeOptions(array $readyTimeOptions): self
    {
        $this->initialized['readyTimeOptions'] = true;
        $this->readyTimeOptions = $readyTimeOptions;

        return $this;
    }

    /**
     * The LatestTimeOptions indicates the possible latest time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 12:00:00,12:30:00,13:00:00,13:30:00....23:59:00<br> Note:LatestTimeOptions are return till endoftheday timings.
     *
     * @return list<string>
     */
    public function getLatestTimeOptions(): array
    {
        return $this->latestTimeOptions;
    }

    /**
     * The LatestTimeOptions indicates the possible latest time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 12:00:00,12:30:00,13:00:00,13:30:00....23:59:00<br> Note:LatestTimeOptions are return till endoftheday timings.
     *
     * @param list<string> $latestTimeOptions
     */
    public function setLatestTimeOptions(array $latestTimeOptions): self
    {
        $this->initialized['latestTimeOptions'] = true;
        $this->latestTimeOptions = $latestTimeOptions;

        return $this;
    }
}