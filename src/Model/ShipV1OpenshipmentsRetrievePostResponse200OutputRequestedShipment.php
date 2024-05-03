<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipment extends \ArrayObject
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
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * It is the sum of all declared values of all packages in a shipment. The amount of totaldeclaredValue must be equal to the sum of all the individual declaredValues in the shipment. The declaredValue and totalDeclaredValue must match in all currencies in one shipment. This value represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentTotalDeclaredValue
     */
    protected $totalDeclaredValue;
    /**
     * Indicate the Shipper contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRecipientsItem>
     */
    protected $recipients;
    /**
     * A unique identifier for a recipient location.
     *
     * @var string
     */
    protected $recipientLocationNumber;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx. Please note, this element does not specify dispatching the courier for package pickup.<br><br>Valid values are:<ul><li>CONTACT_FEDEX_TO_SCHEDULE - FedEx will be contacted to request a pickup.</li><li>DROPOFF_AT_FEDEX_LOCATION - Shipment will be dropped off.</li><li>USE_SCHEDULED_PICKUP - Shipment will be picked up as part of a regular scheduled pickup.</li></ul><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Indicate the FedEx service type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specify the packaging used.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Indicate the shipment total weight in pounds.<br>Example: 10.6<br><br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     *
     * @var float
     */
    protected $totalWeight;
    /**
     * Indicate shipment origin address information, if it is different from the shipper address.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentOrigin
     */
    protected $origin;
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * Specify the special services requested at the shipment level.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.<br>RETURN_SHIPMENT is required for creating return shipments.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices
     */
    protected $shipmentSpecialServices;
    /**
     * This is used to provide eMail notification information..
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail
     */
    protected $expressFreightDetail;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentSmartPostInfoDetail
     */
    protected $smartPostInfoDetail;
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight<sup>®</sup> tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the FedEx InSight<sup>®</sup> tool.
     *
     * @var bool
     */
    protected $blockInsightVisibility;
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification
     */
    protected $labelSpecification;
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification
     */
    protected $shippingDocumentSpecification;
    /**
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     *
     * @var list<string>
     */
    protected $rateRequestType;
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @var string
     */
    protected $preferredCurrency;
    /**
     * For an MPS, this is the total number of packages in the shipment.Applicable for parent shipment for one label at a time shipments. <br>Example: 25
     *
     * @var int
     */
    protected $totalPackageCount;
    /**
     * Indicates the tracking details for the package.Required for child shipments of an oneLabelAtATime shipments
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentMasterTrackingId
     */
    protected $masterTrackingId;
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @var list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @return string
     */
    public function getShipDatestamp() : string
    {
        return $this->shipDatestamp;
    }
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
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
     * It is the sum of all declared values of all packages in a shipment. The amount of totaldeclaredValue must be equal to the sum of all the individual declaredValues in the shipment. The declaredValue and totalDeclaredValue must match in all currencies in one shipment. This value represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentTotalDeclaredValue
     */
    public function getTotalDeclaredValue() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentTotalDeclaredValue
    {
        return $this->totalDeclaredValue;
    }
    /**
     * It is the sum of all declared values of all packages in a shipment. The amount of totaldeclaredValue must be equal to the sum of all the individual declaredValues in the shipment. The declaredValue and totalDeclaredValue must match in all currencies in one shipment. This value represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentTotalDeclaredValue $totalDeclaredValue
     *
     * @return self
     */
    public function setTotalDeclaredValue(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentTotalDeclaredValue $totalDeclaredValue) : self
    {
        $this->initialized['totalDeclaredValue'] = true;
        $this->totalDeclaredValue = $totalDeclaredValue;
        return $this;
    }
    /**
     * Indicate the Shipper contact details for this shipment.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipper
     */
    public function getShipper() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Indicate the Shipper contact details for this shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRecipientsItem>
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * Indicate the descriptive data for the recipient location to which the shipment is to be received.
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRecipientsItem> $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients) : self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * A unique identifier for a recipient location.
     *
     * @return string
     */
    public function getRecipientLocationNumber() : string
    {
        return $this->recipientLocationNumber;
    }
    /**
     * A unique identifier for a recipient location.
     *
     * @param string $recipientLocationNumber
     *
     * @return self
     */
    public function setRecipientLocationNumber(string $recipientLocationNumber) : self
    {
        $this->initialized['recipientLocationNumber'] = true;
        $this->recipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx. Please note, this element does not specify dispatching the courier for package pickup.<br><br>Valid values are:<ul><li>CONTACT_FEDEX_TO_SCHEDULE - FedEx will be contacted to request a pickup.</li><li>DROPOFF_AT_FEDEX_LOCATION - Shipment will be dropped off.</li><li>USE_SCHEDULED_PICKUP - Shipment will be picked up as part of a regular scheduled pickup.</li></ul><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx. Please note, this element does not specify dispatching the courier for package pickup.<br><br>Valid values are:<ul><li>CONTACT_FEDEX_TO_SCHEDULE - FedEx will be contacted to request a pickup.</li><li>DROPOFF_AT_FEDEX_LOCATION - Shipment will be dropped off.</li><li>USE_SCHEDULED_PICKUP - Shipment will be picked up as part of a regular scheduled pickup.</li></ul><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * Indicate the FedEx service type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx service type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
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
     * Specify the packaging used.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * Specify the packaging used.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
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
     * Indicate the shipment total weight in pounds.<br>Example: 10.6<br><br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     *
     * @return float
     */
    public function getTotalWeight() : float
    {
        return $this->totalWeight;
    }
    /**
     * Indicate the shipment total weight in pounds.<br>Example: 10.6<br><br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
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
     * Indicate shipment origin address information, if it is different from the shipper address.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentOrigin
     */
    public function getOrigin() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentOrigin
    {
        return $this->origin;
    }
    /**
     * Indicate shipment origin address information, if it is different from the shipper address.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentOrigin $origin
     *
     * @return self
     */
    public function setOrigin(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentOrigin $origin) : self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingChargesPayment $shippingChargesPayment) : self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Specify the special services requested at the shipment level.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.<br>RETURN_SHIPMENT is required for creating return shipments.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices
     */
    public function getShipmentSpecialServices() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices
    {
        return $this->shipmentSpecialServices;
    }
    /**
     * Specify the special services requested at the shipment level.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.<br>RETURN_SHIPMENT is required for creating return shipments.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices $shipmentSpecialServices
     *
     * @return self
     */
    public function setShipmentSpecialServices(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices $shipmentSpecialServices) : self
    {
        $this->initialized['shipmentSpecialServices'] = true;
        $this->shipmentSpecialServices = $shipmentSpecialServices;
        return $this;
    }
    /**
     * This is used to provide eMail notification information..
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentEmailNotificationDetail
     */
    public function getEmailNotificationDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * This is used to provide eMail notification information..
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentEmailNotificationDetail $emailNotificationDetail) : self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail
     */
    public function getExpressFreightDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail
    {
        return $this->expressFreightDetail;
    }
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail $expressFreightDetail
     *
     * @return self
     */
    public function setExpressFreightDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentExpressFreightDetail $expressFreightDetail) : self
    {
        $this->initialized['expressFreightDetail'] = true;
        $this->expressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail) : self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentCustomsClearanceDetail $customsClearanceDetail) : self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentSmartPostInfoDetail
    {
        return $this->smartPostInfoDetail;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
     *
     * @return self
     */
    public function setSmartPostInfoDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail) : self
    {
        $this->initialized['smartPostInfoDetail'] = true;
        $this->smartPostInfoDetail = $smartPostInfoDetail;
        return $this;
    }
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight<sup>®</sup> tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the FedEx InSight<sup>®</sup> tool.
     *
     * @return bool
     */
    public function getBlockInsightVisibility() : bool
    {
        return $this->blockInsightVisibility;
    }
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight<sup>®</sup> tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the FedEx InSight<sup>®</sup> tool.
     *
     * @param bool $blockInsightVisibility
     *
     * @return self
     */
    public function setBlockInsightVisibility(bool $blockInsightVisibility) : self
    {
        $this->initialized['blockInsightVisibility'] = true;
        $this->blockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification
     */
    public function getLabelSpecification() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecification $labelSpecification) : self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification
    {
        return $this->shippingDocumentSpecification;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification
     *
     * @return self
     */
    public function setShippingDocumentSpecification(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification) : self
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
     * For an MPS, this is the total number of packages in the shipment.Applicable for parent shipment for one label at a time shipments. <br>Example: 25
     *
     * @return int
     */
    public function getTotalPackageCount() : int
    {
        return $this->totalPackageCount;
    }
    /**
     * For an MPS, this is the total number of packages in the shipment.Applicable for parent shipment for one label at a time shipments. <br>Example: 25
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
     * Indicates the tracking details for the package.Required for child shipments of an oneLabelAtATime shipments
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentMasterTrackingId
     */
    public function getMasterTrackingId() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentMasterTrackingId
    {
        return $this->masterTrackingId;
    }
    /**
     * Indicates the tracking details for the package.Required for child shipments of an oneLabelAtATime shipments
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentMasterTrackingId $masterTrackingId
     *
     * @return self
     */
    public function setMasterTrackingId(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentMasterTrackingId $masterTrackingId) : self
    {
        $this->initialized['masterTrackingId'] = true;
        $this->masterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @return list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @param list<ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
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