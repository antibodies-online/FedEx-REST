<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipment extends \ArrayObject
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
     * This is the shipment date. Default value is current date in case the date is not provided in the request.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regularly scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Indicate the Service Type for this shipment.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Indicate the packaging type used for the shipment.</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Indicate the shipment total weight in pounds.<br><br>Example: 10.6
     *
     * @var int
     */
    protected $totalWeight;
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @var string
     */
    protected $preferredCurrency;
    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * The descriptive information for the recipient of the shipment and the physical location for the package destination.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient
     */
    protected $recipient;
    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentSoldTo
     */
    protected $soldTo;
    /**
     * Original address information for the shipment, if different from shipper’s address.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentOrigin
     */
    protected $origin;
    /**
     * Indicates the details about who and how the shipment will be paid for.<br>'payor' is optional when 'paymentType' provided is SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below. 
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
     */
    protected $freightShipmentSpecialServices;
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * Specifies the details specific to a FedEx Freight LTL shipment (i.e., FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services). If freight shipment detail is applicable, then the following fields are required: totalHandlingUnits, fedExFreightBillingContactAndAddress, lineItem, and role.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail
     */
    protected $freightShipmentDetail;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification
     */
    protected $labelSpecification;
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification
     */
    protected $shippingDocumentSpecification;
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     *
     * @var list<string>
     */
    protected $rateRequestType;
    /**
     * For an MPS, this is the total number of packages in the shipment.<br>Example: 25
     *
     * @var int
     */
    protected $totalPackageCount;
    /**
     * Indicates the tracking details for the package.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId
     */
    protected $masterTrackingId;
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of packages in the shipment. At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>  Multiple piece requests will have multiple RequestedPackageLineItems.<br>Maximum occurrences is 99.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * This is the shipment date. Default value is current date in case the date is not provided in the request.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @return string
     */
    public function getShipDatestamp() : string
    {
        return $this->shipDatestamp;
    }
    /**
     * This is the shipment date. Default value is current date in case the date is not provided in the request.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @param string $shipDatestamp
     *
     * @return self
     */
    public function setShipDatestamp(string $shipDatestamp) : self
    {
        $this->initialized['shipDatestamp'] = true;
        $this->shipDatestamp = $shipDatestamp;
        return $this;
    }
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regularly scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regularly scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * Indicate the Service Type for this shipment.
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the Service Type for this shipment.
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
     * Indicate the packaging type used for the shipment.</a>
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * Indicate the packaging type used for the shipment.</a>
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
     * Indicate the shipment total weight in pounds.<br><br>Example: 10.6
     *
     * @return int
     */
    public function getTotalWeight() : int
    {
        return $this->totalWeight;
    }
    /**
     * Indicate the shipment total weight in pounds.<br><br>Example: 10.6
     *
     * @param int $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(int $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @return string
     */
    public function getPreferredCurrency() : string
    {
        return $this->preferredCurrency;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
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
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShipper
     */
    public function getShipper() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * The descriptive information for the recipient of the shipment and the physical location for the package destination.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient
     */
    public function getRecipient() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient
    {
        return $this->recipient;
    }
    /**
     * The descriptive information for the recipient of the shipment and the physical location for the package destination.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient $recipient) : self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentSoldTo
     */
    public function getSoldTo() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentSoldTo
    {
        return $this->soldTo;
    }
    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentSoldTo $soldTo
     *
     * @return self
     */
    public function setSoldTo(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentSoldTo $soldTo) : self
    {
        $this->initialized['soldTo'] = true;
        $this->soldTo = $soldTo;
        return $this;
    }
    /**
     * Original address information for the shipment, if different from shipper’s address.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentOrigin
     */
    public function getOrigin() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentOrigin
    {
        return $this->origin;
    }
    /**
     * Original address information for the shipment, if different from shipper’s address.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentOrigin $origin
     *
     * @return self
     */
    public function setOrigin(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentOrigin $origin) : self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * Indicates the details about who and how the shipment will be paid for.<br>'payor' is optional when 'paymentType' provided is SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Indicates the details about who and how the shipment will be paid for.<br>'payor' is optional when 'paymentType' provided is SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPayment $shippingChargesPayment) : self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below. 
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
     */
    public function getFreightShipmentSpecialServices() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices
    {
        return $this->freightShipmentSpecialServices;
    }
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below. 
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices $freightShipmentSpecialServices
     *
     * @return self
     */
    public function setFreightShipmentSpecialServices(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices $freightShipmentSpecialServices) : self
    {
        $this->initialized['freightShipmentSpecialServices'] = true;
        $this->freightShipmentSpecialServices = $freightShipmentSpecialServices;
        return $this;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentEmailNotificationDetail
     */
    public function getEmailNotificationDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentEmailNotificationDetail $emailNotificationDetail) : self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
    /**
     * Specifies the details specific to a FedEx Freight LTL shipment (i.e., FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services). If freight shipment detail is applicable, then the following fields are required: totalHandlingUnits, fedExFreightBillingContactAndAddress, lineItem, and role.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail
     */
    public function getFreightShipmentDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail
    {
        return $this->freightShipmentDetail;
    }
    /**
     * Specifies the details specific to a FedEx Freight LTL shipment (i.e., FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services). If freight shipment detail is applicable, then the following fields are required: totalHandlingUnits, fedExFreightBillingContactAndAddress, lineItem, and role.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail $freightShipmentDetail
     *
     * @return self
     */
    public function setFreightShipmentDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetail $freightShipmentDetail) : self
    {
        $this->initialized['freightShipmentDetail'] = true;
        $this->freightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail) : self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetail $customsClearanceDetail) : self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification
     */
    public function getLabelSpecification() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentLabelSpecification $labelSpecification) : self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification
    {
        return $this->shippingDocumentSpecification;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification
     *
     * @return self
     */
    public function setShippingDocumentSpecification(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification) : self
    {
        $this->initialized['shippingDocumentSpecification'] = true;
        $this->shippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     *
     * @return list<string>
     */
    public function getRateRequestType() : array
    {
        return $this->rateRequestType;
    }
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
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
     * For an MPS, this is the total number of packages in the shipment.<br>Example: 25
     *
     * @return int
     */
    public function getTotalPackageCount() : int
    {
        return $this->totalPackageCount;
    }
    /**
     * For an MPS, this is the total number of packages in the shipment.<br>Example: 25
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
     * Indicates the tracking details for the package.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId
     */
    public function getMasterTrackingId() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId
    {
        return $this->masterTrackingId;
    }
    /**
     * Indicates the tracking details for the package.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId $masterTrackingId
     *
     * @return self
     */
    public function setMasterTrackingId(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentMasterTrackingId $masterTrackingId) : self
    {
        $this->initialized['masterTrackingId'] = true;
        $this->masterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of packages in the shipment. At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>  Multiple piece requests will have multiple RequestedPackageLineItems.<br>Maximum occurrences is 99.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of packages in the shipment. At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>  Multiple piece requests will have multiple RequestedPackageLineItems.<br>Maximum occurrences is 99.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems) : self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
}