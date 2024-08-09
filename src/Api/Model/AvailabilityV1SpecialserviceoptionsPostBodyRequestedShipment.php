<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipment extends \ArrayObject
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
     * Required. <br>Indicate the Shipper contact details for this shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper
     */
    protected $shipper;
    /**
     * Specifies the recipient details, such as postal code, state or province code, and country code of the recipient. Note: At least one recipient is required. 
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient
     */
    protected $recipient;
    /**
     * Indicate the FedEx service type used for the shipment. The result will be filtered by the serviceType value indicated.If a serviceType is not indicated, then all the applicable services and corresponding rates will be returned.<br> Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a><br>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies packaging Type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Conditional. Used to filter results to a specific ship date if populated on the request. Value will be defaulted to the current date/time.<br>Format: [YYYY-MM-DDThh:mm:ssTZD]<br>Example: 2020-10-13T11:00:00TZD<br>Note:<br>1.The date format must be YYYY-MM-DDThh:mm:ssTZD.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @var string
     */
    protected $shipDateStamp;
    /**
     * Conditional.<br>Specifies the packaging type, weight, and dimensions of the package.  Applicable for  EXPRESS and GROUND but not for FREIGHT shipments.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * Conditional <br> Required for Express and Ground, but optional for FREIGHT or SMARTPOST <br> Example: DROP_BOX
     *
     * @var string
     */
    protected $dropoffType;
    /**
    * Optional
    
    Provide any Variable Handling Charge details
    *
    * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail
    */
    protected $variableHandlingChargeDetail;
    /**
     * Conditional<br> Required when using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services or FXFR carrier code
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail
     */
    protected $freightShipmentDetail;
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. These special services are available at the shipment level for some or all service types. Indicated if availability for the special service is requested.<br>ENUM :<ul><li>FEDEX_ONE_RATE</li><li>FOOD</li><li>FREIGHT_GUARANTEE</li><li>FREIGHT_TO_COLLECT</li><li>FUTURE_DAY_SHIPMENT</li><li>HOLD_AT_LOCATION</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested
     */
    protected $specialServicesRequested;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Shipping Document Specification Details
     *
     * @var string
     */
    protected $shippingDocumentSpecification;
    /**
     * Required. <br>Indicate the Shipper contact details for this shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper
     */
    public function getShipper(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper
    {
        return $this->shipper;
    }
    /**
     * Required. <br>Indicate the Shipper contact details for this shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper $shipper
     *
     * @return self
     */
    public function setShipper(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentshipper $shipper): self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Specifies the recipient details, such as postal code, state or province code, and country code of the recipient. Note: At least one recipient is required. 
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient
     */
    public function getRecipient(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient
    {
        return $this->recipient;
    }
    /**
     * Specifies the recipient details, such as postal code, state or province code, and country code of the recipient. Note: At least one recipient is required. 
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient $recipient
     *
     * @return self
     */
    public function setRecipient(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Indicate the FedEx service type used for the shipment. The result will be filtered by the serviceType value indicated.If a serviceType is not indicated, then all the applicable services and corresponding rates will be returned.<br> Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a><br>
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Indicate the FedEx service type used for the shipment. The result will be filtered by the serviceType value indicated.If a serviceType is not indicated, then all the applicable services and corresponding rates will be returned.<br> Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a><br>
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
     * Specifies packaging Type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     * @return string
     */
    public function getPackagingType(): string
    {
        return $this->packagingType;
    }
    /**
     * Specifies packaging Type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
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
     * Conditional. Used to filter results to a specific ship date if populated on the request. Value will be defaulted to the current date/time.<br>Format: [YYYY-MM-DDThh:mm:ssTZD]<br>Example: 2020-10-13T11:00:00TZD<br>Note:<br>1.The date format must be YYYY-MM-DDThh:mm:ssTZD.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @return string
     */
    public function getShipDateStamp(): string
    {
        return $this->shipDateStamp;
    }
    /**
     * Conditional. Used to filter results to a specific ship date if populated on the request. Value will be defaulted to the current date/time.<br>Format: [YYYY-MM-DDThh:mm:ssTZD]<br>Example: 2020-10-13T11:00:00TZD<br>Note:<br>1.The date format must be YYYY-MM-DDThh:mm:ssTZD.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     * @param string $shipDateStamp
     *
     * @return self
     */
    public function setShipDateStamp(string $shipDateStamp): self
    {
        $this->initialized['shipDateStamp'] = true;
        $this->shipDateStamp = $shipDateStamp;
        return $this;
    }
    /**
     * Conditional.<br>Specifies the packaging type, weight, and dimensions of the package.  Applicable for  EXPRESS and GROUND but not for FREIGHT shipments.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems(): array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * Conditional.<br>Specifies the packaging type, weight, and dimensions of the package.  Applicable for  EXPRESS and GROUND but not for FREIGHT shipments.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrequestedPackageLineItemsItem> $requestedPackageLineItems
     *
     * @return self
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems): self
    {
        $this->initialized['requestedPackageLineItems'] = true;
        $this->requestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Conditional <br> Required for Express and Ground, but optional for FREIGHT or SMARTPOST <br> Example: DROP_BOX
     *
     * @return string
     */
    public function getDropoffType(): string
    {
        return $this->dropoffType;
    }
    /**
     * Conditional <br> Required for Express and Ground, but optional for FREIGHT or SMARTPOST <br> Example: DROP_BOX
     *
     * @param string $dropoffType
     *
     * @return self
     */
    public function setDropoffType(string $dropoffType): self
    {
        $this->initialized['dropoffType'] = true;
        $this->dropoffType = $dropoffType;
        return $this;
    }
    /**
    * Optional
    
    Provide any Variable Handling Charge details
    *
    * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail
    */
    public function getVariableHandlingChargeDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail
    {
        return $this->variableHandlingChargeDetail;
    }
    /**
    * Optional
    
    Provide any Variable Handling Charge details
    *
    * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail $variableHandlingChargeDetail
    *
    * @return self
    */
    public function setVariableHandlingChargeDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail $variableHandlingChargeDetail): self
    {
        $this->initialized['variableHandlingChargeDetail'] = true;
        $this->variableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Conditional<br> Required when using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services or FXFR carrier code
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail
     */
    public function getFreightShipmentDetail(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail
    {
        return $this->freightShipmentDetail;
    }
    /**
     * Conditional<br> Required when using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services or FXFR carrier code
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail $freightShipmentDetail
     *
     * @return self
     */
    public function setFreightShipmentDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentfreightShipmentDetail $freightShipmentDetail): self
    {
        $this->initialized['freightShipmentDetail'] = true;
        $this->freightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. These special services are available at the shipment level for some or all service types. Indicated if availability for the special service is requested.<br>ENUM :<ul><li>FEDEX_ONE_RATE</li><li>FOOD</li><li>FREIGHT_GUARANTEE</li><li>FREIGHT_TO_COLLECT</li><li>FUTURE_DAY_SHIPMENT</li><li>HOLD_AT_LOCATION</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested
     */
    public function getSpecialServicesRequested(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested
    {
        return $this->specialServicesRequested;
    }
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. These special services are available at the shipment level for some or all service types. Indicated if availability for the special service is requested.<br>ENUM :<ul><li>FEDEX_ONE_RATE</li><li>FOOD</li><li>FREIGHT_GUARANTEE</li><li>FREIGHT_TO_COLLECT</li><li>FUTURE_DAY_SHIPMENT</li><li>HOLD_AT_LOCATION</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested $specialServicesRequested
     *
     * @return self
     */
    public function setSpecialServicesRequested(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested $specialServicesRequested): self
    {
        $this->initialized['specialServicesRequested'] = true;
        $this->specialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * @return string
     */
    public function getPickupType(): string
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
    public function setPickupType(string $pickupType): self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
     * Shipping Document Specification Details
     *
     * @return string
     */
    public function getShippingDocumentSpecification(): string
    {
        return $this->shippingDocumentSpecification;
    }
    /**
     * Shipping Document Specification Details
     *
     * @param string $shippingDocumentSpecification
     *
     * @return self
     */
    public function setShippingDocumentSpecification(string $shippingDocumentSpecification): self
    {
        $this->initialized['shippingDocumentSpecification'] = true;
        $this->shippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
}