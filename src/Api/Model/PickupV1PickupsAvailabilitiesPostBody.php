<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsAvailabilitiesPostBody extends \ArrayObject
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
     * Specify the address for which pickup availability inquiry has been made.
     *
     * @var PickupV1PickupsAvailabilitiesPostBodyPickupAddress
     */
    protected $pickupAddress;
    /**
     * Specify the date the package is to be picked up. The format is YYYY-MM-DD. If left blank, the system considers current date as dispatch date.<br> Example: 2020-01-01
     *
     * @var string
     */
    protected $dispatchDate;
    /**
     * Specify the time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.<br> Example: 15:00:00
     *
     * @var string
     */
    protected $packageReadyTime;
    /**
     * Specify the latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.<br>Example: 18:00:00
     *
     * @var string
     */
    protected $customerCloseTime;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Specify pickup request type.
     *
     * @var list<string>
     */
    protected $pickupRequestType;
    /**
     * Specify the shipment details, such as service type, packaging type, weight and dimensions. <br><br><i>Note: serviceType is required for domestic or international pickup availabilities.</i>
     *
     * @var array<string, mixed>
     */
    protected $shipmentAttributes;
    /**
     * Specify number of business days to consider when checking availability.<br>For example if you are indicating pickupDate for a Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @var int
     */
    protected $numberOfBusinessDays;
    /**
     * This object is used to specify the package details.
     *
     * @var list<PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem>
     */
    protected $packageDetails;
    /**
     * The associated account number, which will be invoiced for the pickup.<br>Example:613787364.
     *
     * @var string
     */
    protected $associatedAccountNumber;
    /**
     * This represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br>Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * @var string
     */
    protected $associatedAccountNumberType;
    /**
     * Specify the four letter code of a FedEx operating company thet meets your requirements.<br>Examples of FedEx Operating Companies are: <ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * @var list<string>
     */
    protected $carriers;
    /**
     * Specify the country relationship among the shipments being picked up. Empty or incorrect values will result in to errors. <br><br><i>Note: <b>shipmentAttributes/serviceType</b> is required for domestic or international pickup availabilities.</i>
     *
     * @var string
     */
    protected $countryRelationship;
    /**
     * Specify the address for which pickup availability inquiry has been made.
     *
     * @return PickupV1PickupsAvailabilitiesPostBodyPickupAddress
     */
    public function getPickupAddress() : PickupV1PickupsAvailabilitiesPostBodyPickupAddress
    {
        return $this->pickupAddress;
    }
    /**
     * Specify the address for which pickup availability inquiry has been made.
     *
     * @param PickupV1PickupsAvailabilitiesPostBodyPickupAddress $pickupAddress
     *
     * @return self
     */
    public function setPickupAddress(PickupV1PickupsAvailabilitiesPostBodyPickupAddress $pickupAddress) : self
    {
        $this->initialized['pickupAddress'] = true;
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * Specify the date the package is to be picked up. The format is YYYY-MM-DD. If left blank, the system considers current date as dispatch date.<br> Example: 2020-01-01
     *
     * @return string
     */
    public function getDispatchDate() : string
    {
        return $this->dispatchDate;
    }
    /**
     * Specify the date the package is to be picked up. The format is YYYY-MM-DD. If left blank, the system considers current date as dispatch date.<br> Example: 2020-01-01
     *
     * @param string $dispatchDate
     *
     * @return self
     */
    public function setDispatchDate(string $dispatchDate) : self
    {
        $this->initialized['dispatchDate'] = true;
        $this->dispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Specify the time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.<br> Example: 15:00:00
     *
     * @return string
     */
    public function getPackageReadyTime() : string
    {
        return $this->packageReadyTime;
    }
    /**
     * Specify the time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.<br> Example: 15:00:00
     *
     * @param string $packageReadyTime
     *
     * @return self
     */
    public function setPackageReadyTime(string $packageReadyTime) : self
    {
        $this->initialized['packageReadyTime'] = true;
        $this->packageReadyTime = $packageReadyTime;
        return $this;
    }
    /**
     * Specify the latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.<br>Example: 18:00:00
     *
     * @return string
     */
    public function getCustomerCloseTime() : string
    {
        return $this->customerCloseTime;
    }
    /**
     * Specify the latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.<br>Example: 18:00:00
     *
     * @param string $customerCloseTime
     *
     * @return self
     */
    public function setCustomerCloseTime(string $customerCloseTime) : self
    {
        $this->initialized['customerCloseTime'] = true;
        $this->customerCloseTime = $customerCloseTime;
        return $this;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @param string $pickupType
     *
     * @return self
     */
    public function setPickupType(string $pickupType) : self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
     * Specify pickup request type.
     *
     * @return list<string>
     */
    public function getPickupRequestType() : array
    {
        return $this->pickupRequestType;
    }
    /**
     * Specify pickup request type.
     *
     * @param list<string> $pickupRequestType
     *
     * @return self
     */
    public function setPickupRequestType(array $pickupRequestType) : self
    {
        $this->initialized['pickupRequestType'] = true;
        $this->pickupRequestType = $pickupRequestType;
        return $this;
    }
    /**
     * Specify the shipment details, such as service type, packaging type, weight and dimensions. <br><br><i>Note: serviceType is required for domestic or international pickup availabilities.</i>
     *
     * @return array<string, mixed>
     */
    public function getShipmentAttributes() : iterable
    {
        return $this->shipmentAttributes;
    }
    /**
     * Specify the shipment details, such as service type, packaging type, weight and dimensions. <br><br><i>Note: serviceType is required for domestic or international pickup availabilities.</i>
     *
     * @param array<string, mixed> $shipmentAttributes
     *
     * @return self
     */
    public function setShipmentAttributes(iterable $shipmentAttributes) : self
    {
        $this->initialized['shipmentAttributes'] = true;
        $this->shipmentAttributes = $shipmentAttributes;
        return $this;
    }
    /**
     * Specify number of business days to consider when checking availability.<br>For example if you are indicating pickupDate for a Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @return int
     */
    public function getNumberOfBusinessDays() : int
    {
        return $this->numberOfBusinessDays;
    }
    /**
     * Specify number of business days to consider when checking availability.<br>For example if you are indicating pickupDate for a Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * @param int $numberOfBusinessDays
     *
     * @return self
     */
    public function setNumberOfBusinessDays(int $numberOfBusinessDays) : self
    {
        $this->initialized['numberOfBusinessDays'] = true;
        $this->numberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
    /**
     * This object is used to specify the package details.
     *
     * @return list<PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem>
     */
    public function getPackageDetails() : array
    {
        return $this->packageDetails;
    }
    /**
     * This object is used to specify the package details.
     *
     * @param list<PickupV1PickupsAvailabilitiesPostBodyPackageDetailsItem> $packageDetails
     *
     * @return self
     */
    public function setPackageDetails(array $packageDetails) : self
    {
        $this->initialized['packageDetails'] = true;
        $this->packageDetails = $packageDetails;
        return $this;
    }
    /**
     * The associated account number, which will be invoiced for the pickup.<br>Example:613787364.
     *
     * @return string
     */
    public function getAssociatedAccountNumber() : string
    {
        return $this->associatedAccountNumber;
    }
    /**
     * The associated account number, which will be invoiced for the pickup.<br>Example:613787364.
     *
     * @param string $associatedAccountNumber
     *
     * @return self
     */
    public function setAssociatedAccountNumber(string $associatedAccountNumber) : self
    {
        $this->initialized['associatedAccountNumber'] = true;
        $this->associatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * This represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br>Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * @return string
     */
    public function getAssociatedAccountNumberType() : string
    {
        return $this->associatedAccountNumberType;
    }
    /**
     * This represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br>Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * @param string $associatedAccountNumberType
     *
     * @return self
     */
    public function setAssociatedAccountNumberType(string $associatedAccountNumberType) : self
    {
        $this->initialized['associatedAccountNumberType'] = true;
        $this->associatedAccountNumberType = $associatedAccountNumberType;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company thet meets your requirements.<br>Examples of FedEx Operating Companies are: <ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * @return list<string>
     */
    public function getCarriers() : array
    {
        return $this->carriers;
    }
    /**
     * Specify the four letter code of a FedEx operating company thet meets your requirements.<br>Examples of FedEx Operating Companies are: <ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * @param list<string> $carriers
     *
     * @return self
     */
    public function setCarriers(array $carriers) : self
    {
        $this->initialized['carriers'] = true;
        $this->carriers = $carriers;
        return $this;
    }
    /**
     * Specify the country relationship among the shipments being picked up. Empty or incorrect values will result in to errors. <br><br><i>Note: <b>shipmentAttributes/serviceType</b> is required for domestic or international pickup availabilities.</i>
     *
     * @return string
     */
    public function getCountryRelationship() : string
    {
        return $this->countryRelationship;
    }
    /**
     * Specify the country relationship among the shipments being picked up. Empty or incorrect values will result in to errors. <br><br><i>Note: <b>shipmentAttributes/serviceType</b> is required for domestic or international pickup availabilities.</i>
     *
     * @param string $countryRelationship
     *
     * @return self
     */
    public function setCountryRelationship(string $countryRelationship) : self
    {
        $this->initialized['countryRelationship'] = true;
        $this->countryRelationship = $countryRelationship;
        return $this;
    }
}