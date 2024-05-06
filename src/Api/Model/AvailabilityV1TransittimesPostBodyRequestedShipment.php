<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipment extends \ArrayObject
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
     * The descriptive data on the physical location of shipment origin.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipper
     */
    protected $shipper;
    /**
     * Provide recipients physical location/address details to where the shipment delivered.
     *
     * @var list<AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem>
     */
    protected $recipients;
    /**
     * Provide FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding transit times will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specify the packaging used.
     *
     * @var string
     */
    protected $packagingType;
    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>Required Format is YYYY-MM-DD <br> example : 2019-09-01 
     *
     * @var string
     */
    protected $shipDatestamp;
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
     *
     * @var string
     */
    protected $pickupType;
    /**
     * Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.<br>Note: For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) account number is mandatory to be provided under shippingChargesPayment.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment
     */
    protected $shippingChargesPayment;
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @var list<AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    protected $requestedPackageLineItems;
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices
     */
    protected $shipmentSpecialServices;
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail
     */
    protected $customsClearanceDetail;
    /**
     * The descriptive data on the physical location of shipment origin.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipper
     */
    public function getShipper() : AvailabilityV1TransittimesPostBodyRequestedShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * The descriptive data on the physical location of shipment origin.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(AvailabilityV1TransittimesPostBodyRequestedShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Provide recipients physical location/address details to where the shipment delivered.
     *
     * @return list<AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem>
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * Provide recipients physical location/address details to where the shipment delivered.
     *
     * @param list<AvailabilityV1TransittimesPostBodyRequestedShipmentRecipientsItem> $recipients
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
     * Provide FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding transit times will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Provide FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding transit times will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
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
     * Specify the packaging used.
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * Specify the packaging used.
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
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>Required Format is YYYY-MM-DD <br> example : 2019-09-01 
     *
     * @return string
     */
    public function getShipDatestamp() : string
    {
        return $this->shipDatestamp;
    }
    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>Required Format is YYYY-MM-DD <br> example : 2019-09-01 
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
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
     *
     * @return string
     */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
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
     * Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.<br>Note: For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) account number is mandatory to be provided under shippingChargesPayment.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment
     */
    public function getShippingChargesPayment() : AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment
    {
        return $this->shippingChargesPayment;
    }
    /**
     * Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.<br>Note: For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) account number is mandatory to be provided under shippingChargesPayment.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment
     *
     * @return self
     */
    public function setShippingChargesPayment(AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPayment $shippingChargesPayment) : self
    {
        $this->initialized['shippingChargesPayment'] = true;
        $this->shippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @return list<AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem>
     */
    public function getRequestedPackageLineItems() : array
    {
        return $this->requestedPackageLineItems;
    }
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * @param list<AvailabilityV1TransittimesPostBodyRequestedShipmentRequestedPackageLineItemsItem> $requestedPackageLineItems
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
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices
     */
    public function getShipmentSpecialServices() : AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices
    {
        return $this->shipmentSpecialServices;
    }
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices
     *
     * @return self
     */
    public function setShipmentSpecialServices(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices $shipmentSpecialServices) : self
    {
        $this->initialized['shipmentSpecialServices'] = true;
        $this->shipmentSpecialServices = $shipmentSpecialServices;
        return $this;
    }
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail() : AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail
    {
        return $this->customsClearanceDetail;
    }
    /**
     * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     *
     * @return self
     */
    public function setCustomsClearanceDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetail $customsClearanceDetail) : self
    {
        $this->initialized['customsClearanceDetail'] = true;
        $this->customsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
}