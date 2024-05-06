<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    protected $etdDetail;
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    protected $deliveryOnInvoiceAcceptanceDetail;
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    protected $internationalTrafficInArmsRegulationsDetail;
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * This is the shipment level COD detail.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;
    /**
     * Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes) : self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    public function getEtdDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesEtdDetail
    {
        return $this->etdDetail;
    }
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail
     *
     * @return self
     */
    public function setEtdDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail) : self
    {
        $this->initialized['etdDetail'] = true;
        $this->etdDetail = $etdDetail;
        return $this;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
    {
        return $this->deliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     *
     * @return self
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail) : self
    {
        $this->initialized['deliveryOnInvoiceAcceptanceDetail'] = true;
        $this->deliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
    {
        return $this->internationalTrafficInArmsRegulationsDetail;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     *
     * @return self
     */
    public function setInternationalTrafficInArmsRegulationsDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail) : self
    {
        $this->initialized['internationalTrafficInArmsRegulationsDetail'] = true;
        $this->internationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail) : self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    public function getShipmentCODDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail
     *
     * @return self
     */
    public function setShipmentCODDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail) : self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;
        return $this;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail) : self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail) : self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail) : self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
}