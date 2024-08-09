<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipment extends \ArrayObject
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
     * Indicate the shipment date.<br>Format: YYYY-MM-DD<br>Note: Default value is current date in case the date is not provided in the request.<br>Example: 2021-04-06
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * Select if the shipment is to be dropped off at Fedex location or to be picked up by FedEx or if it is a scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Indicate the FedEx service Type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see available FedEx Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Indicate the type of packaging used for the package.<br>Note: For Express Freight shipments, the packaging will default to value  YOUR_PACKAGING irrespective type provided in the request.<br>Example: FEDEX_ENVELOPE<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * shipment total weight should be in Kg or in Lbs
     *
     * @var int
     */
    protected $totalWeight;
    /**
     * Indicate shippers details. <br>Note: Shipper address and Origin address should be the same address.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Indicate the shipment recipient details or the physical location details for the package destination.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRecipientsItem>
     */
    protected $recipients;
    /**
     * Indicate the shipment origin address information, if it is different from the shippers address.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentOrigin
     */
    protected $origin;
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * Indicate the shipment special service or handling required for this shipment. <br>Note: <ul><li>If the shipper is requesting a special service, the special service type must be indicated in the object specialServiceTypes, and all supporting detail must be provided in the appropriate sub-object below.</li><li>For returns it is required to provide value RETURN_SHIPMENT in the specialServiceTypes.</li></ul>
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServices
     */
    protected $shipmentSpecialServices;
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These are customs clearance details. Required for International and intra-country Shipments.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentSmartPostInfoDetail
     */
    protected $smartPostInfoDetail;
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     *
     * @var bool
     */
    protected $blockInsightVisibility;
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecification
     */
    protected $labelSpecification;
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification
     */
    protected $shippingDocumentSpecification;
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns published list rates will be returned in addition to account-specific rate (if applicable).</li><li>PREFERRED - It returns rates in currency as specified in the PreferredCurrency element.</li><li>ACCOUNT - Returns account specific rates. Note: The account specific rates are returned by default if the shipper account number is specified in the shipment.</li><li>INCENTIVE - This is one-time discount for incentivizing the customer.</li></ul>Examples: ["ACCOUNT", "PREFERRED"] 
     *
     * @var list<string>
     */
    protected $rateRequestType;
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @var string
     */
    protected $preferredCurrency;
    /**
     * Use this object to provide the package details.<br>Note: <ul><li>At least one instance containing the weight is required for EXPRESS and GROUND package.</li><li>Only Single piece requests are supported henceonly one line item should be provided.</li><li>Multiple piece shipment validation is not supported.</li></ul>
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * Indicate the shipment date.<br>Format: YYYY-MM-DD<br>Note: Default value is current date in case the date is not provided in the request.<br>Example: 2021-04-06
     *
     * @return string
     */
    public function getShipDatestamp(): string
    {
        return $this->shipDatestamp;
    }
    /**
     * Indicate the shipment date.<br>Format: YYYY-MM-DD<br>Note: Default value is current date in case the date is not provided in the request.<br>Example: 2021-04-06
     *
     * @param string $shipDatestamp
     *
     * @return self
     */
    public function setShipDatestamp(string $shipDatestamp): self
    {
        $this->initialized['shipDatestamp'] = true;
        $this->shipDatestamp = $shipDatestamp;
        return $this;
    }
    /**
     * Select if the shipment is to be dropped off at Fedex location or to be picked up by FedEx or if it is a scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType(): string
    {
        return $this->pickupType;
    }
    /**
     * Select if the shipment is to be dropped off at Fedex location or to be picked up by FedEx or if it is a scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @param string $pickupType
     *
     * @return self
     */
    public function setPickupType(string $pickupType): self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
     * Indicate the FedEx service Type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see available FedEx Service Types</a>
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx service Type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see available FedEx Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Indicate the type of packaging used for the package.<br>Note: For Express Freight shipments, the packaging will default to value  YOUR_PACKAGING irrespective type provided in the request.<br>Example: FEDEX_ENVELOPE<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType(): string
    {
        return $this->packagingType;
    }
    /**
     * Indicate the type of packaging used for the package.<br>Note: For Express Freight shipments, the packaging will default to value  YOUR_PACKAGING irrespective type provided in the request.<br>Example: FEDEX_ENVELOPE<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @param string $packagingType
     *
     * @return self
     */
    public function setPackagingType(string $packagingType): self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * shipment total weight should be in Kg or in Lbs
     *
     * @return int
     */
    public function getTotalWeight(): int
    {
        return $this->totalWeight;
    }
    /**
     * shipment total weight should be in Kg or in Lbs
     *
     * @param int $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(int $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Indicate shippers details. <br>Note: Shipper address and Origin address should be the same address.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipper
     */
    public function getShipper(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Indicate shippers details. <br>Note: Shipper address and Origin address should be the same address.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipper $shipper): self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Indicate the shipment recipient details or the physical location details for the package destination.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRecipientsItem>
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }
    /**
     * Indicate the shipment recipient details or the physical location details for the package destination.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRecipientsItem> $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients): self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * Indicate the shipment origin address information, if it is different from the shippers address.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentOrigin
     */
    public function getOrigin(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentOrigin
    {
        return $this->origin;
    }
    /**
     * Indicate the shipment origin address information, if it is different from the shippers address.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentOrigin $origin
     *
     * @return self
     */
    public function setOrigin(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentOrigin $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment): self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Indicate the shipment special service or handling required for this shipment. <br>Note: <ul><li>If the shipper is requesting a special service, the special service type must be indicated in the object specialServiceTypes, and all supporting detail must be provided in the appropriate sub-object below.</li><li>For returns it is required to provide value RETURN_SHIPMENT in the specialServiceTypes.</li></ul>
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServices
     */
    public function getShipmentSpecialServices(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServices
    {
        return $this->shipmentSpecialServices;
    }
    /**
     * Indicate the shipment special service or handling required for this shipment. <br>Note: <ul><li>If the shipper is requesting a special service, the special service type must be indicated in the object specialServiceTypes, and all supporting detail must be provided in the appropriate sub-object below.</li><li>For returns it is required to provide value RETURN_SHIPMENT in the specialServiceTypes.</li></ul>
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices
     *
     * @return self
     */
    public function setShipmentSpecialServices(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices): self
    {
        $this->initialized['shipmentSpecialServices'] = true;
        $this->shipmentSpecialServices = $shipmentSpecialServices;
        return $this;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentEmailNotificationDetail
     */
    public function getEmailNotificationDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail): self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These are customs clearance details. Required for International and intra-country Shipments.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * These are customs clearance details. Required for International and intra-country Shipments.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail): self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentSmartPostInfoDetail
    {
        return $this->smartPostInfoDetail;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
     *
     * @return self
     */
    public function setSmartPostInfoDetail(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail): self
    {
        $this->initialized['smartPostInfoDetail'] = true;
        $this->smartPostInfoDetail = $smartPostInfoDetail;
        return $this;
    }
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     *
     * @return bool
     */
    public function getBlockInsightVisibility(): bool
    {
        return $this->blockInsightVisibility;
    }
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     *
     * @param bool $blockInsightVisibility
     *
     * @return self
     */
    public function setBlockInsightVisibility(bool $blockInsightVisibility): self
    {
        $this->initialized['blockInsightVisibility'] = true;
        $this->blockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecification
     */
    public function getLabelSpecification(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentLabelSpecification $labelSpecification): self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification
    {
        return $this->shippingDocumentSpecification;
    }
    /**
     * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification
     *
     * @return self
     */
    public function setShippingDocumentSpecification(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShippingDocumentSpecification $shippingDocumentSpecification): self
    {
        $this->initialized['shippingDocumentSpecification'] = true;
        $this->shippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns published list rates will be returned in addition to account-specific rate (if applicable).</li><li>PREFERRED - It returns rates in currency as specified in the PreferredCurrency element.</li><li>ACCOUNT - Returns account specific rates. Note: The account specific rates are returned by default if the shipper account number is specified in the shipment.</li><li>INCENTIVE - This is one-time discount for incentivizing the customer.</li></ul>Examples: ["ACCOUNT", "PREFERRED"] 
     *
     * @return list<string>
     */
    public function getRateRequestType(): array
    {
        return $this->rateRequestType;
    }
    /**
     * Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns published list rates will be returned in addition to account-specific rate (if applicable).</li><li>PREFERRED - It returns rates in currency as specified in the PreferredCurrency element.</li><li>ACCOUNT - Returns account specific rates. Note: The account specific rates are returned by default if the shipper account number is specified in the shipment.</li><li>INCENTIVE - This is one-time discount for incentivizing the customer.</li></ul>Examples: ["ACCOUNT", "PREFERRED"] 
     *
     * @param list<string> $rateRequestType
     *
     * @return self
     */
    public function setRateRequestType(array $rateRequestType): self
    {
        $this->initialized['rateRequestType'] = true;
        $this->rateRequestType = $rateRequestType;
        return $this;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @return string
     */
    public function getPreferredCurrency(): string
    {
        return $this->preferredCurrency;
    }
    /**
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     *
     * @param string $preferredCurrency
     *
     * @return self
     */
    public function setPreferredCurrency(string $preferredCurrency): self
    {
        $this->initialized['preferredCurrency'] = true;
        $this->preferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Use this object to provide the package details.<br>Note: <ul><li>At least one instance containing the weight is required for EXPRESS and GROUND package.</li><li>Only Single piece requests are supported henceonly one line item should be provided.</li><li>Multiple piece shipment validation is not supported.</li></ul>
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems(): array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * Use this object to provide the package details.<br>Note: <ul><li>At least one instance containing the weight is required for EXPRESS and GROUND package.</li><li>Only Single piece requests are supported henceonly one line item should be provided.</li><li>Multiple piece shipment validation is not supported.</li></ul>
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems): self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
}