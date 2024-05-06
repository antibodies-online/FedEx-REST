<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipment extends \ArrayObject
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
     * The descriptive data for the physical shipper location from which the shipment originates.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentRecipient
     */
    protected $recipient;
    /**
     * Indicate the FedEx service type used for this shipment. The results will be filtered by the service type value indicated. If no serviceType is indicated then all the applicable services and corresponding rates will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Object to specify email details for shipment notifications.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values (when a choice is possible). Used in conjunction with the rateRequestType data element. This element is used to pull Preferred rates.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $preferredCurrency;
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li></ul>Examples: ["LIST","PREFERRED"]
     *
     * @var list<string>
     */
    protected $rateRequestType;
    /**
     *  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Required Format is YYYY-MM-DD<br> Example: 2019-09-05
     *
     * @var string
     */
    protected $shipDateStamp;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     *
     * @var list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * Indicate whether or not its a document Shipment.
     *
     * @var bool
     */
    protected $documentShipment;
    /**
     * contains the detail used to calculate a variable handling charge, a potentially non-fixed handling surcharge. Based on if there is a percent value, or a fixed amount, the charge can either be fixed or percents based.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * This is the Packaging type associated with this rate. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Indicate the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @var int
     */
    protected $totalPackageCount;
    /**
     * Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     *
     * @var float
     */
    protected $totalWeight;
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate data needed for the special services. 
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices
     */
    protected $shipmentSpecialServices;
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * 
     *
     * @var bool
     */
    protected $groupShipment;
    /**
     * service type information details
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail
     */
    protected $serviceTypeDetail;
    /**
     * Indicate the FedEx Smartpost shipment details. Required for Smartpost shipments only.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail
     */
    protected $smartPostInfoDetail;
    /**
    * Conditional"
    Details specific to a FedEx Express Freight® shipment (i.e. FedEx First Freight, FedEx 1Day, 2Day, and 3Day Freight).
    *
    * @var RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail
    */
    protected $expressFreightDetail;
    /**
     * If set to 'true', indicates it is a Ground shipment.<br> Example: 'false'
     *
     * @var bool
     */
    protected $groundShipment;
    /**
     * The descriptive data for the physical shipper location from which the shipment originates.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipper
     */
    public function getShipper() : RateV1RatesQuotesPostBodyRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * The descriptive data for the physical shipper location from which the shipment originates.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(RateV1RatesQuotesPostBodyRequestedShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentRecipient
     */
    public function getRecipient() : RateV1RatesQuotesPostBodyRequestedShipmentRecipient
    {
        return $this->recipient;
    }
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(RateV1RatesQuotesPostBodyRequestedShipmentRecipient $recipient) : self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Indicate the FedEx service type used for this shipment. The results will be filtered by the service type value indicated. If no serviceType is indicated then all the applicable services and corresponding rates will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx service type used for this shipment. The results will be filtered by the service type value indicated. If no serviceType is indicated then all the applicable services and corresponding rates will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Object to specify email details for shipment notifications.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail
     */
    public function getEmailNotificationDetail() : RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * Object to specify email details for shipment notifications.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(RateV1RatesQuotesPostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail) : self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values (when a choice is possible). Used in conjunction with the rateRequestType data element. This element is used to pull Preferred rates.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getPreferredCurrency() : string
    {
        return $this->preferredCurrency;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values (when a choice is possible). Used in conjunction with the rateRequestType data element. This element is used to pull Preferred rates.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     *
     * @param string $preferredCurrency
     *
     * @return self
     */
    public function setPreferredCurrency(string $preferredCurrency) : self
    {
        $this->initialized['preferredCurrency'] = true;
        $this->preferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li></ul>Examples: ["LIST","PREFERRED"]
     *
     * @return list<string>
     */
    public function getRateRequestType() : array
    {
        return $this->rateRequestType;
    }
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li></ul>Examples: ["LIST","PREFERRED"]
     *
     * @param list<string> $rateRequestType
     *
     * @return self
     */
    public function setRateRequestType(array $rateRequestType) : self
    {
        $this->initialized['rateRequestType'] = true;
        $this->rateRequestType = $rateRequestType;
        return $this;
    }
    /**
     *  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Required Format is YYYY-MM-DD<br> Example: 2019-09-05
     *
     * @return string
     */
    public function getShipDateStamp() : string
    {
        return $this->shipDateStamp;
    }
    /**
     *  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Required Format is YYYY-MM-DD<br> Example: 2019-09-05
     *
     * @param string $shipDateStamp
     *
     * @return self
     */
    public function setShipDateStamp(string $shipDateStamp) : self
    {
        $this->initialized['shipDateStamp'] = true;
        $this->shipDateStamp = $shipDateStamp;
        return $this;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     *
     * @return list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     *
     * @param list<RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems) : self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Indicate whether or not its a document Shipment.
     *
     * @return bool
     */
    public function getDocumentShipment() : bool
    {
        return $this->documentShipment;
    }
    /**
     * Indicate whether or not its a document Shipment.
     *
     * @param bool $documentShipment
     *
     * @return self
     */
    public function setDocumentShipment(bool $documentShipment) : self
    {
        $this->initialized['documentShipment'] = true;
        $this->documentShipment = $documentShipment;
        return $this;
    }
    /**
     * contains the detail used to calculate a variable handling charge, a potentially non-fixed handling surcharge. Based on if there is a percent value, or a fixed amount, the charge can either be fixed or percents based.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail() : RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * contains the detail used to calculate a variable handling charge, a potentially non-fixed handling surcharge. Based on if there is a percent value, or a fixed amount, the charge can either be fixed or percents based.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail) : self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * This is the Packaging type associated with this rate. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * This is the Packaging type associated with this rate. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @param string $packagingType
     *
     * @return self
     */
    public function setPackagingType(string $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Indicate the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @return int
     */
    public function getTotalPackageCount() : int
    {
        return $this->totalPackageCount;
    }
    /**
     * Indicate the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     *
     * @param int $totalPackageCount
     *
     * @return self
     */
    public function setTotalPackageCount(int $totalPackageCount) : self
    {
        $this->initialized['totalPackageCount'] = true;
        $this->totalPackageCount = $totalPackageCount;
        return $this;
    }
    /**
     * Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     *
     * @return float
     */
    public function getTotalWeight() : float
    {
        return $this->totalWeight;
    }
    /**
     * Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     *
     * @param float $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(float $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate data needed for the special services. 
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices
     */
    public function getShipmentSpecialServices() : RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices
    {
        return $this->shipmentSpecialServices;
    }
    /**
     * Specify the special services requested at the shipment level.<br>This has to be specified if rate data needed for the special services. 
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices
     *
     * @return self
     */
    public function setShipmentSpecialServices(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices) : self
    {
        $this->initialized['shipmentSpecialServices'] = true;
        $this->shipmentSpecialServices = $shipmentSpecialServices;
        return $this;
    }
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail() : RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(RateV1RatesQuotesPostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail) : self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGroupShipment() : bool
    {
        return $this->groupShipment;
    }
    /**
     * 
     *
     * @param bool $groupShipment
     *
     * @return self
     */
    public function setGroupShipment(bool $groupShipment) : self
    {
        $this->initialized['groupShipment'] = true;
        $this->groupShipment = $groupShipment;
        return $this;
    }
    /**
     * service type information details
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail
     */
    public function getServiceTypeDetail() : RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail
    {
        return $this->serviceTypeDetail;
    }
    /**
     * service type information details
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail $serviceTypeDetail
     *
     * @return self
     */
    public function setServiceTypeDetail(RateV1RatesQuotesPostBodyRequestedShipmentServiceTypeDetail $serviceTypeDetail) : self
    {
        $this->initialized['serviceTypeDetail'] = true;
        $this->serviceTypeDetail = $serviceTypeDetail;
        return $this;
    }
    /**
     * Indicate the FedEx Smartpost shipment details. Required for Smartpost shipments only.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail() : RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail
    {
        return $this->smartPostInfoDetail;
    }
    /**
     * Indicate the FedEx Smartpost shipment details. Required for Smartpost shipments only.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
     *
     * @return self
     */
    public function setSmartPostInfoDetail(RateV1RatesQuotesPostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail) : self
    {
        $this->initialized['smartPostInfoDetail'] = true;
        $this->smartPostInfoDetail = $smartPostInfoDetail;
        return $this;
    }
    /**
    * Conditional"
    Details specific to a FedEx Express Freight® shipment (i.e. FedEx First Freight, FedEx 1Day, 2Day, and 3Day Freight).
    *
    * @return RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail
    */
    public function getExpressFreightDetail() : RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail
    {
        return $this->expressFreightDetail;
    }
    /**
    * Conditional"
    Details specific to a FedEx Express Freight® shipment (i.e. FedEx First Freight, FedEx 1Day, 2Day, and 3Day Freight).
    *
    * @param RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail $expressFreightDetail
    *
    * @return self
    */
    public function setExpressFreightDetail(RateV1RatesQuotesPostBodyRequestedShipmentExpressFreightDetail $expressFreightDetail) : self
    {
        $this->initialized['expressFreightDetail'] = true;
        $this->expressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * If set to 'true', indicates it is a Ground shipment.<br> Example: 'false'
     *
     * @return bool
     */
    public function getGroundShipment() : bool
    {
        return $this->groundShipment;
    }
    /**
     * If set to 'true', indicates it is a Ground shipment.<br> Example: 'false'
     *
     * @param bool $groundShipment
     *
     * @return self
     */
    public function setGroundShipment(bool $groundShipment) : self
    {
        $this->initialized['groundShipment'] = true;
        $this->groundShipment = $groundShipment;
        return $this;
    }
}