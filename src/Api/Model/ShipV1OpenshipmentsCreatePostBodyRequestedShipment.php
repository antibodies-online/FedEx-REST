<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipment extends \ArrayObject
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
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regular scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specify the Packaging Type used with the shipment.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: YOUR_PACKAGING<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * shipment total weight should be in Kg or in Lbs <br><br>Example: 20.6.
     *
     * @var float
     */
    protected $totalWeight;
    /**
     * Specify the Shipper information. <br><i>Note: Shipper and Origin address should be same.</i>
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Specify recipient information and/ the physical destination location for the package.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRecipientsItem>
     */
    protected $recipients;
    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSoldTo
     */
    protected $soldTo;
    /**
     * Specify the Shipment Origin address information, if different from shipper’s address.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentOrigin
     */
    protected $origin;
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. 
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices
     */
    protected $shipmentSpecialServices;
    /**
     * This is used to provide eMail notification information.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentEmailNotificationDetail
     */
    protected $emailNotificationDetail;
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentExpressFreightDetail
     */
    protected $expressFreightDetail;
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    protected $variableHandlingChargeDetail;
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSmartPostInfoDetail
     */
    protected $smartPostInfoDetail;
    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     *
     * @var bool
     */
    protected $blockInsightVisibility;
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
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * @return string
     */
    public function getShipDatestamp(): string
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
    public function setShipDatestamp(string $shipDatestamp): self
    {
        $this->initialized['shipDatestamp'] = true;
        $this->shipDatestamp = $shipDatestamp;
        return $this;
    }
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regular scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType(): string
    {
        return $this->pickupType;
    }
    /**
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regular scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
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
     * Specify the Packaging Type used with the shipment.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: YOUR_PACKAGING<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType(): string
    {
        return $this->packagingType;
    }
    /**
     * Specify the Packaging Type used with the shipment.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: YOUR_PACKAGING<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
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
     * shipment total weight should be in Kg or in Lbs <br><br>Example: 20.6.
     *
     * @return float
     */
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }
    /**
     * shipment total weight should be in Kg or in Lbs <br><br>Example: 20.6.
     *
     * @param float $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(float $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Specify the Shipper information. <br><i>Note: Shipper and Origin address should be same.</i>
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipper
     */
    public function getShipper(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Specify the Shipper information. <br><i>Note: Shipper and Origin address should be same.</i>
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipper $shipper): self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Specify recipient information and/ the physical destination location for the package.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRecipientsItem>
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }
    /**
     * Specify recipient information and/ the physical destination location for the package.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRecipientsItem> $recipients
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
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSoldTo
     */
    public function getSoldTo(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSoldTo
    {
        return $this->soldTo;
    }
    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSoldTo $soldTo
     *
     * @return self
     */
    public function setSoldTo(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSoldTo $soldTo): self
    {
        $this->initialized['soldTo'] = true;
        $this->soldTo = $soldTo;
        return $this;
    }
    /**
     * Specify the Shipment Origin address information, if different from shipper’s address.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentOrigin
     */
    public function getOrigin(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentOrigin
    {
        return $this->origin;
    }
    /**
     * Specify the Shipment Origin address information, if different from shipper’s address.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentOrigin $origin
     *
     * @return self
     */
    public function setOrigin(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentOrigin $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment): self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. 
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices
     */
    public function getShipmentSpecialServices(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices
    {
        return $this->shipmentSpecialServices;
    }
    /**
     * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. 
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices
     *
     * @return self
     */
    public function setShipmentSpecialServices(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices): self
    {
        $this->initialized['shipmentSpecialServices'] = true;
        $this->shipmentSpecialServices = $shipmentSpecialServices;
        return $this;
    }
    /**
     * This is used to provide eMail notification information.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentEmailNotificationDetail
     */
    public function getEmailNotificationDetail(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentEmailNotificationDetail
    {
        return $this->emailNotificationDetail;
    }
    /**
     * This is used to provide eMail notification information.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail
     *
     * @return self
     */
    public function setEmailNotificationDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentEmailNotificationDetail $emailNotificationDetail): self
    {
        $this->initialized['emailNotificationDetail'] = true;
        $this->emailNotificationDetail = $emailNotificationDetail;
        return $this;
    }
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentExpressFreightDetail
     */
    public function getExpressFreightDetail(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentExpressFreightDetail
    {
        return $this->expressFreightDetail;
    }
    /**
     * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentExpressFreightDetail $expressFreightDetail
     *
     * @return self
     */
    public function setExpressFreightDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentExpressFreightDetail $expressFreightDetail): self
    {
        $this->initialized['expressFreightDetail'] = true;
        $this->expressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentVariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
     * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
     *
     * @return self
     */
    public function setVariableHandlingChargeDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * These are customs clearance details. <br>Required for International and intra-country Shipments.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail): self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail(): ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSmartPostInfoDetail
    {
        return $this->smartPostInfoDetail;
    }
    /**
     * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
     *
     * @return self
     */
    public function setSmartPostInfoDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail): self
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
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     *
     * @return list<string>
     */
    public function getRateRequestType(): array
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
    public function setRateRequestType(array $rateRequestType): self
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
    public function getPreferredCurrency(): string
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
    public function setPreferredCurrency(string $preferredCurrency): self
    {
        $this->initialized['preferredCurrency'] = true;
        $this->preferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems(): array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
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