<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsPostBody extends \ArrayObject
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
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @var PickupV1PickupsPostBodyAssociatedAccountNumber
     */
    protected $associatedAccountNumber;
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @var mixed
     */
    protected $originDetail;
    /**
     * This enumeration represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br> Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * @var string
     */
    protected $associatedAccountNumberType;
    /**
    * Specify The total weight of the packages for the pickup. Unit of measure is
    LB.
    *
    * @var PickupV1PickupsPostBodyTotalWeight
    */
    protected $totalWeight;
    /**
     * Specify the total number of packages for the pickup.<br> Example: 5
     *
     * @var int
     */
    protected $packageCount;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br> Examples of FedEx Operating Comapnies are :  <ul><li>FDXE- FedEx Express</li><li>FDXG- FedEx Ground</li>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * The city name, state or province code and the address classification associated with the customer account which requested the pickup.
     *
     * @var PickupV1PickupsPostBodyAccountAddressOfRecord
     */
    protected $accountAddressOfRecord;
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @var string
     */
    protected $remarks;
    /**
     * Describes the country relationship among the shipments being picked up. This element is not mandatory for this request, but when added, the mandatory values are DOMESTIC or INTERNATIONAL. Empty or incorrect values will result in to errors.
     *
     * @var string
     */
    protected $countryRelationships;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i> <br>Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP <br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: 795803657326<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Description of the commodity being shipped. <br>Example:This field contains Commodity Description.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * @var string
     */
    protected $commodityDescription;
    /**
     * Placeholder for Express Freight pickup details.
     *
     * @var PickupV1PickupsPostBodyExpressFreightDetail
     */
    protected $expressFreightDetail;
    /**
     * Specify the number of oversize packages that are tendered to FedEx Ground.
     *
     * @var int
     */
    protected $oversizePackageCount;
    /**
     * 
     *
     * @var mixed
     */
    protected $pickupNotificationDetail;
    /**
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @return PickupV1PickupsPostBodyAssociatedAccountNumber
     */
    public function getAssociatedAccountNumber() : PickupV1PickupsPostBodyAssociatedAccountNumber
    {
        return $this->associatedAccountNumber;
    }
    /**
     * This is the FedEx account number. <br>Example: Your account number
     *
     * @param PickupV1PickupsPostBodyAssociatedAccountNumber $associatedAccountNumber
     *
     * @return self
     */
    public function setAssociatedAccountNumber(PickupV1PickupsPostBodyAssociatedAccountNumber $associatedAccountNumber) : self
    {
        $this->initialized['associatedAccountNumber'] = true;
        $this->associatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @return mixed
     */
    public function getOriginDetail()
    {
        return $this->originDetail;
    }
    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * @param mixed $originDetail
     *
     * @return self
     */
    public function setOriginDetail($originDetail) : self
    {
        $this->initialized['originDetail'] = true;
        $this->originDetail = $originDetail;
        return $this;
    }
    /**
     * This enumeration represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br> Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * @return string
     */
    public function getAssociatedAccountNumberType() : string
    {
        return $this->associatedAccountNumberType;
    }
    /**
     * This enumeration represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br> Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
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
    * Specify The total weight of the packages for the pickup. Unit of measure is
    LB.
    *
    * @return PickupV1PickupsPostBodyTotalWeight
    */
    public function getTotalWeight() : PickupV1PickupsPostBodyTotalWeight
    {
        return $this->totalWeight;
    }
    /**
    * Specify The total weight of the packages for the pickup. Unit of measure is
    LB.
    *
    * @param PickupV1PickupsPostBodyTotalWeight $totalWeight
    *
    * @return self
    */
    public function setTotalWeight(PickupV1PickupsPostBodyTotalWeight $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specify the total number of packages for the pickup.<br> Example: 5
     *
     * @return int
     */
    public function getPackageCount() : int
    {
        return $this->packageCount;
    }
    /**
     * Specify the total number of packages for the pickup.<br> Example: 5
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount) : self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br> Examples of FedEx Operating Comapnies are :  <ul><li>FDXE- FedEx Express</li><li>FDXG- FedEx Ground</li>
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br> Examples of FedEx Operating Comapnies are :  <ul><li>FDXE- FedEx Express</li><li>FDXG- FedEx Ground</li>
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * The city name, state or province code and the address classification associated with the customer account which requested the pickup.
     *
     * @return PickupV1PickupsPostBodyAccountAddressOfRecord
     */
    public function getAccountAddressOfRecord() : PickupV1PickupsPostBodyAccountAddressOfRecord
    {
        return $this->accountAddressOfRecord;
    }
    /**
     * The city name, state or province code and the address classification associated with the customer account which requested the pickup.
     *
     * @param PickupV1PickupsPostBodyAccountAddressOfRecord $accountAddressOfRecord
     *
     * @return self
     */
    public function setAccountAddressOfRecord(PickupV1PickupsPostBodyAccountAddressOfRecord $accountAddressOfRecord) : self
    {
        $this->initialized['accountAddressOfRecord'] = true;
        $this->accountAddressOfRecord = $accountAddressOfRecord;
        return $this;
    }
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @return string
     */
    public function getRemarks() : string
    {
        return $this->remarks;
    }
    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * @param string $remarks
     *
     * @return self
     */
    public function setRemarks(string $remarks) : self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Describes the country relationship among the shipments being picked up. This element is not mandatory for this request, but when added, the mandatory values are DOMESTIC or INTERNATIONAL. Empty or incorrect values will result in to errors.
     *
     * @return string
     */
    public function getCountryRelationships() : string
    {
        return $this->countryRelationships;
    }
    /**
     * Describes the country relationship among the shipments being picked up. This element is not mandatory for this request, but when added, the mandatory values are DOMESTIC or INTERNATIONAL. Empty or incorrect values will result in to errors.
     *
     * @param string $countryRelationships
     *
     * @return self
     */
    public function setCountryRelationships(string $countryRelationships) : self
    {
        $this->initialized['countryRelationships'] = true;
        $this->countryRelationships = $countryRelationships;
        return $this;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i> <br>Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP <br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i> <br>Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP <br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: 795803657326<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: 795803657326<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Description of the commodity being shipped. <br>Example:This field contains Commodity Description.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * @return string
     */
    public function getCommodityDescription() : string
    {
        return $this->commodityDescription;
    }
    /**
     * Description of the commodity being shipped. <br>Example:This field contains Commodity Description.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * @param string $commodityDescription
     *
     * @return self
     */
    public function setCommodityDescription(string $commodityDescription) : self
    {
        $this->initialized['commodityDescription'] = true;
        $this->commodityDescription = $commodityDescription;
        return $this;
    }
    /**
     * Placeholder for Express Freight pickup details.
     *
     * @return PickupV1PickupsPostBodyExpressFreightDetail
     */
    public function getExpressFreightDetail() : PickupV1PickupsPostBodyExpressFreightDetail
    {
        return $this->expressFreightDetail;
    }
    /**
     * Placeholder for Express Freight pickup details.
     *
     * @param PickupV1PickupsPostBodyExpressFreightDetail $expressFreightDetail
     *
     * @return self
     */
    public function setExpressFreightDetail(PickupV1PickupsPostBodyExpressFreightDetail $expressFreightDetail) : self
    {
        $this->initialized['expressFreightDetail'] = true;
        $this->expressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Specify the number of oversize packages that are tendered to FedEx Ground.
     *
     * @return int
     */
    public function getOversizePackageCount() : int
    {
        return $this->oversizePackageCount;
    }
    /**
     * Specify the number of oversize packages that are tendered to FedEx Ground.
     *
     * @param int $oversizePackageCount
     *
     * @return self
     */
    public function setOversizePackageCount(int $oversizePackageCount) : self
    {
        $this->initialized['oversizePackageCount'] = true;
        $this->oversizePackageCount = $oversizePackageCount;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPickupNotificationDetail()
    {
        return $this->pickupNotificationDetail;
    }
    /**
     * 
     *
     * @param mixed $pickupNotificationDetail
     *
     * @return self
     */
    public function setPickupNotificationDetail($pickupNotificationDetail) : self
    {
        $this->initialized['pickupNotificationDetail'] = true;
        $this->pickupNotificationDetail = $pickupNotificationDetail;
        return $this;
    }
}