<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    protected $etdDetail;
    /**
     * Use this object for specifying return shipment details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail
     */
    protected $returnShipmentDetail;
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    protected $deliveryOnInvoiceAcceptanceDetail;
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    protected $internationalTrafficInArmsRegulationsDetail;
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetail
     */
    protected $pendingShipmentDetail;
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location.<br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * This is the shipment level COD detail.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;
    /**
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * @param list<string> $specialServiceTypes
     *
     * @return self
     */
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    public function getEtdDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesEtdDetail
    {
        return $this->etdDetail;
    }
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail
     *
     * @return self
     */
    public function setEtdDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail): self
    {
        $this->initialized['etdDetail'] = true;
        $this->etdDetail = $etdDetail;
        return $this;
    }
    /**
     * Use this object for specifying return shipment details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail
     */
    public function getReturnShipmentDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail
    {
        return $this->returnShipmentDetail;
    }
    /**
     * Use this object for specifying return shipment details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail $returnShipmentDetail
     *
     * @return self
     */
    public function setReturnShipmentDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesReturnShipmentDetail $returnShipmentDetail): self
    {
        $this->initialized['returnShipmentDetail'] = true;
        $this->returnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
    {
        return $this->deliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     *
     * @return self
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail): self
    {
        $this->initialized['deliveryOnInvoiceAcceptanceDetail'] = true;
        $this->deliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
    {
        return $this->internationalTrafficInArmsRegulationsDetail;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     *
     * @return self
     */
    public function setInternationalTrafficInArmsRegulationsDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail): self
    {
        $this->initialized['internationalTrafficInArmsRegulationsDetail'] = true;
        $this->internationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetail
     */
    public function getPendingShipmentDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetail
    {
        return $this->pendingShipmentDetail;
    }
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetail $pendingShipmentDetail
     *
     * @return self
     */
    public function setPendingShipmentDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesPendingShipmentDetail $pendingShipmentDetail): self
    {
        $this->initialized['pendingShipmentDetail'] = true;
        $this->pendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location.<br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location.<br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail): self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    public function getShipmentCODDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail
     *
     * @return self
     */
    public function setShipmentCODDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail): self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;
        return $this;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail): self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail): self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory. 
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail): self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
}