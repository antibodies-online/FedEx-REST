<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    protected $etdDetail;
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    protected $deliveryOnInvoiceAcceptanceDetail;
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    protected $internationalTrafficInArmsRegulationsDetail;
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * This is the shipment level COD detail.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
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
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    public function getEtdDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
    {
        return $this->etdDetail;
    }
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail
     *
     * @return self
     */
    public function setEtdDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail) : self
    {
        $this->initialized['etdDetail'] = true;
        $this->etdDetail = $etdDetail;
        return $this;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
    {
        return $this->deliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     *
     * @return self
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail) : self
    {
        $this->initialized['deliveryOnInvoiceAcceptanceDetail'] = true;
        $this->deliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
    {
        return $this->internationalTrafficInArmsRegulationsDetail;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     *
     * @return self
     */
    public function setInternationalTrafficInArmsRegulationsDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail) : self
    {
        $this->initialized['internationalTrafficInArmsRegulationsDetail'] = true;
        $this->internationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail) : self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    public function getShipmentCODDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail
     *
     * @return self
     */
    public function setShipmentCODDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail) : self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;
        return $this;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail) : self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail) : self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail) : self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
}