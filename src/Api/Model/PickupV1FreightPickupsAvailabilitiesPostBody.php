<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBody extends \ArrayObject
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
     * The address for which pickup availability inquiry is made.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress
     */
    protected $pickupAddress;
    /**
     * The time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.
     *
     * @var string
     */
    protected $packageReadyTime;
    /**
     * The latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.
     *
     * @var string
     */
    protected $customerCloseTime;
    /**
     * Indicates the shipment details such as service type, packaging type, weight and dimensions.
     *
     * @var array<string, mixed>
     */
    protected $shipmentAttributes;
    /**
     * 
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail
     */
    protected $freightPickupSpecialServiceDetail;
    /**
     * Indicates the date, the package is to be picked up. The format is YYYY-MM-DD. If the field is left blank, the system considers current date as dispatch date.
     *
     * @var string
     */
    protected $dispatchDate;
    /**
     * Number of business days to consider when checking availability.<br>For example if you are indicating pickupDate as Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @var int
     */
    protected $numberOfBusinessDays;
    /**
     * The address for which pickup availability inquiry is made.
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress
     */
    public function getPickupAddress(): PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress
    {
        return $this->pickupAddress;
    }
    /**
     * The address for which pickup availability inquiry is made.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress $pickupAddress
     *
     * @return self
     */
    public function setPickupAddress(PickupV1FreightPickupsAvailabilitiesPostBodyPickupAddress $pickupAddress): self
    {
        $this->initialized['pickupAddress'] = true;
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * The time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.
     *
     * @return string
     */
    public function getPackageReadyTime(): string
    {
        return $this->packageReadyTime;
    }
    /**
     * The time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.
     *
     * @param string $packageReadyTime
     *
     * @return self
     */
    public function setPackageReadyTime(string $packageReadyTime): self
    {
        $this->initialized['packageReadyTime'] = true;
        $this->packageReadyTime = $packageReadyTime;
        return $this;
    }
    /**
     * The latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.
     *
     * @return string
     */
    public function getCustomerCloseTime(): string
    {
        return $this->customerCloseTime;
    }
    /**
     * The latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.
     *
     * @param string $customerCloseTime
     *
     * @return self
     */
    public function setCustomerCloseTime(string $customerCloseTime): self
    {
        $this->initialized['customerCloseTime'] = true;
        $this->customerCloseTime = $customerCloseTime;
        return $this;
    }
    /**
     * Indicates the shipment details such as service type, packaging type, weight and dimensions.
     *
     * @return array<string, mixed>
     */
    public function getShipmentAttributes(): iterable
    {
        return $this->shipmentAttributes;
    }
    /**
     * Indicates the shipment details such as service type, packaging type, weight and dimensions.
     *
     * @param array<string, mixed> $shipmentAttributes
     *
     * @return self
     */
    public function setShipmentAttributes(iterable $shipmentAttributes): self
    {
        $this->initialized['shipmentAttributes'] = true;
        $this->shipmentAttributes = $shipmentAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail
     */
    public function getFreightPickupSpecialServiceDetail(): PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail
    {
        return $this->freightPickupSpecialServiceDetail;
    }
    /**
     * 
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail $freightPickupSpecialServiceDetail
     *
     * @return self
     */
    public function setFreightPickupSpecialServiceDetail(PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail $freightPickupSpecialServiceDetail): self
    {
        $this->initialized['freightPickupSpecialServiceDetail'] = true;
        $this->freightPickupSpecialServiceDetail = $freightPickupSpecialServiceDetail;
        return $this;
    }
    /**
     * Indicates the date, the package is to be picked up. The format is YYYY-MM-DD. If the field is left blank, the system considers current date as dispatch date.
     *
     * @return string
     */
    public function getDispatchDate(): string
    {
        return $this->dispatchDate;
    }
    /**
     * Indicates the date, the package is to be picked up. The format is YYYY-MM-DD. If the field is left blank, the system considers current date as dispatch date.
     *
     * @param string $dispatchDate
     *
     * @return self
     */
    public function setDispatchDate(string $dispatchDate): self
    {
        $this->initialized['dispatchDate'] = true;
        $this->dispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Number of business days to consider when checking availability.<br>For example if you are indicating pickupDate as Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @return int
     */
    public function getNumberOfBusinessDays(): int
    {
        return $this->numberOfBusinessDays;
    }
    /**
     * Number of business days to consider when checking availability.<br>For example if you are indicating pickupDate as Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @param int $numberOfBusinessDays
     *
     * @return self
     */
    public function setNumberOfBusinessDays(int $numberOfBusinessDays): self
    {
        $this->initialized['numberOfBusinessDays'] = true;
        $this->numberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
}