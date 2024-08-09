<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * Details for the Return Shipment.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail
     */
    protected $returnShipmentDetail;
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail
     */
    protected $deliveryOnInvoiceAcceptanceDetail;
    /**
     * These are International Traffic In Arms Regulations shipment service Details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalTrafficInArmsRegulationsDetail
     */
    protected $internationalTrafficInArmsRegulationsDetail;
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail
     */
    protected $pendingShipmentDetail;
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @var RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: BROKER_SELECT_OPTION <br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Details for the Return Shipment.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail
     */
    public function getReturnShipmentDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail
    {
        return $this->returnShipmentDetail;
    }
    /**
     * Details for the Return Shipment.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail $returnShipmentDetail
     *
     * @return self
     */
    public function setReturnShipmentDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail $returnShipmentDetail): self
    {
        $this->initialized['returnShipmentDetail'] = true;
        $this->returnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail
    {
        return $this->deliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     *
     * @return self
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesdeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail): self
    {
        $this->initialized['deliveryOnInvoiceAcceptanceDetail'] = true;
        $this->deliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service Details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalTrafficInArmsRegulationsDetail
    {
        return $this->internationalTrafficInArmsRegulationsDetail;
    }
    /**
     * These are International Traffic In Arms Regulations shipment service Details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     *
     * @return self
     */
    public function setInternationalTrafficInArmsRegulationsDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail): self
    {
        $this->initialized['internationalTrafficInArmsRegulationsDetail'] = true;
        $this->internationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail
     */
    public function getPendingShipmentDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail
    {
        return $this->pendingShipmentDetail;
    }
    /**
     * This object is used to specify the Pending Shipment Type for Email label.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail $pendingShipmentDetail
     *
     * @return self
     */
    public function setPendingShipmentDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetail $pendingShipmentDetail): self
    {
        $this->initialized['pendingShipmentDetail'] = true;
        $this->pendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail
     */
    public function getHoldAtLocationDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesholdAtLocationDetail $holdAtLocationDetail): self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail
     */
    public function getShipmentCODDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail $shipmentCODDetail
     *
     * @return self
     */
    public function setShipmentCODDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetail $shipmentCODDetail): self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;
        return $this;
    }
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail
     */
    public function getShipmentDryIceDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentDryIceDetail $shipmentDryIceDetail): self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesinternationalControlledExportDetail $internationalControlledExportDetail): self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @return RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail(): RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @param RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServiceshomeDeliveryPremiumDetail $homeDeliveryPremiumDetail): self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: BROKER_SELECT_OPTION <br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes(): array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: BROKER_SELECT_OPTION <br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
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
}