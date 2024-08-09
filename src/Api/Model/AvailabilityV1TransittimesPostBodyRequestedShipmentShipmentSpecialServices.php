<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServices extends \ArrayObject
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
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: BROKER_SELECT_OPTION <br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail
     */
    protected $codDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
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
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail
     */
    public function getCodDetail(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail
    {
        return $this->codDetail;
    }
    /**
     * Use this object to specify Collect On Delivery (COD) shipment details.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail $codDetail
     *
     * @return self
     */
    public function setCodDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesCodDetail $codDetail): self
    {
        $this->initialized['codDetail'] = true;
        $this->codDetail = $codDetail;
        return $this;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail): self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail): self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail): self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail(): AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(AvailabilityV1TransittimesPostBodyRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail): self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
}