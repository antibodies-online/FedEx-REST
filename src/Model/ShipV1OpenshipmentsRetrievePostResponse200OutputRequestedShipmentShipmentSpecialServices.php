<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>.
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail
     */
    protected $etdDetail;
    /**
     * Use this object for specifying return shipment details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail
     */
    protected $returnShipmentDetail;
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
     */
    protected $deliveryOnInvoiceAcceptanceDetail;
    /**
     * These are International Traffic In Arms Regulations shipment service details.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
     */
    protected $internationalTrafficInArmsRegulationsDetail;
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail
     */
    protected $pendingShipmentDetail;
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * This is the shipment level COD detail.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;

    /**
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>.
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }

    /**
     * Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>.
     *
     * @param list<string> $specialServiceTypes
     */
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;

        return $this;
    }

    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     */
    public function getEtdDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail
    {
        return $this->etdDetail;
    }

    /**
     * Use this object to specify all information on how the electronic Trade document references used with the shipment.
     */
    public function setEtdDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesEtdDetail $etdDetail): self
    {
        $this->initialized['etdDetail'] = true;
        $this->etdDetail = $etdDetail;

        return $this;
    }

    /**
     * Use this object for specifying return shipment details.
     */
    public function getReturnShipmentDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail
    {
        return $this->returnShipmentDetail;
    }

    /**
     * Use this object for specifying return shipment details.
     */
    public function setReturnShipmentDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesReturnShipmentDetail $returnShipmentDetail): self
    {
        $this->initialized['returnShipmentDetail'] = true;
        $this->returnShipmentDetail = $returnShipmentDetail;

        return $this;
    }

    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     */
    public function getDeliveryOnInvoiceAcceptanceDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail
    {
        return $this->deliveryOnInvoiceAcceptanceDetail;
    }

    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail): self
    {
        $this->initialized['deliveryOnInvoiceAcceptanceDetail'] = true;
        $this->deliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;

        return $this;
    }

    /**
     * These are International Traffic In Arms Regulations shipment service details.
     */
    public function getInternationalTrafficInArmsRegulationsDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail
    {
        return $this->internationalTrafficInArmsRegulationsDetail;
    }

    /**
     * These are International Traffic In Arms Regulations shipment service details.
     */
    public function setInternationalTrafficInArmsRegulationsDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail): self
    {
        $this->initialized['internationalTrafficInArmsRegulationsDetail'] = true;
        $this->internationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;

        return $this;
    }

    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     */
    public function getPendingShipmentDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail
    {
        return $this->pendingShipmentDetail;
    }

    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     */
    public function setPendingShipmentDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesPendingShipmentDetail $pendingShipmentDetail): self
    {
        $this->initialized['pendingShipmentDetail'] = true;
        $this->pendingShipmentDetail = $pendingShipmentDetail;

        return $this;
    }

    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>.
     */
    public function getHoldAtLocationDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }

    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>.
     */
    public function setHoldAtLocationDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail): self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;

        return $this;
    }

    /**
     * This is the shipment level COD detail.
     */
    public function getShipmentCODDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }

    /**
     * This is the shipment level COD detail.
     */
    public function setShipmentCODDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail): self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;

        return $this;
    }

    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>.
     */
    public function getShipmentDryIceDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }

    /**
     * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>.
     */
    public function setShipmentDryIceDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail): self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;

        return $this;
    }

    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     */
    public function getInternationalControlledExportDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }

    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     */
    public function setInternationalControlledExportDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail): self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;

        return $this;
    }

    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     */
    public function getHomeDeliveryPremiumDetail(): ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }

    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     */
    public function setHomeDeliveryPremiumDetail(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail): self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;

        return $this;
    }
}