<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequested extends \ArrayObject
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
     * Use this object to specify International Controlled Export shipment Details.<br>Example: WAREHOUSE_WITHDRAWAL.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail
     */
    protected $internationalControlledExportDetail;
    /**
     * Indicates the return shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail
     */
    protected $returnShipmentDetail;
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail
     */
    protected $homeDeliveryPremiumDetail;
    /**
     * These are Email details for the return shipment.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail
     */
    protected $returnEmailDetail;
    /**
     * Optional <br> The types of all special services requested for the enclosing shipment.<br> Example: FEDEX_EXPRESS<br><a onclick='loadDocReference("servicetypes")'>Click here to see Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * These are service elements for Saturday Delivery special service.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail
     */
    protected $saturdayDeliveryDetail;
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail
     */
    protected $holdAtLocationDetail;
    /**
    * Conditional <br>
    For Express-only COD, populate this object for COD detail information at the shipment level.  When data is provided in this object, the related COD enum will be populated automatically by RATC
    *
    * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail
    */
    protected $codDetail;
    /**
     * This is the descriptive data required for the FedEx shipment containing dangerous materials. This element is required when SpecialServicetype DRY_ICE is selected in SpecialServicetype collection.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail
     */
    protected $shipmentDryIceDetail;
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail
     */
    protected $freightDirectDetail;
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Example: WAREHOUSE_WITHDRAWAL.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail
    {
        return $this->internationalControlledExportDetail;
    }
    /**
     * Use this object to specify International Controlled Export shipment Details.<br>Example: WAREHOUSE_WITHDRAWAL.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail $internationalControlledExportDetail
     *
     * @return self
     */
    public function setInternationalControlledExportDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedinternationalControlledExportDetail $internationalControlledExportDetail) : self
    {
        $this->initialized['internationalControlledExportDetail'] = true;
        $this->internationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Indicates the return shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail
     */
    public function getReturnShipmentDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail
    {
        return $this->returnShipmentDetail;
    }
    /**
     * Indicates the return shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail $returnShipmentDetail
     *
     * @return self
     */
    public function setReturnShipmentDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnShipmentDetail $returnShipmentDetail) : self
    {
        $this->initialized['returnShipmentDetail'] = true;
        $this->returnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail
    {
        return $this->homeDeliveryPremiumDetail;
    }
    /**
     * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     *
     * @return self
     */
    public function setHomeDeliveryPremiumDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedhomeDeliveryPremiumDetail $homeDeliveryPremiumDetail) : self
    {
        $this->initialized['homeDeliveryPremiumDetail'] = true;
        $this->homeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * These are Email details for the return shipment.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail
     */
    public function getReturnEmailDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail
    {
        return $this->returnEmailDetail;
    }
    /**
     * These are Email details for the return shipment.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail $returnEmailDetail
     *
     * @return self
     */
    public function setReturnEmailDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedreturnEmailDetail $returnEmailDetail) : self
    {
        $this->initialized['returnEmailDetail'] = true;
        $this->returnEmailDetail = $returnEmailDetail;
        return $this;
    }
    /**
     * Optional <br> The types of all special services requested for the enclosing shipment.<br> Example: FEDEX_EXPRESS<br><a onclick='loadDocReference("servicetypes")'>Click here to see Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Optional <br> The types of all special services requested for the enclosing shipment.<br> Example: FEDEX_EXPRESS<br><a onclick='loadDocReference("servicetypes")'>Click here to see Special Service Types</a>
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
     * These are service elements for Saturday Delivery special service.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail
     */
    public function getSaturdayDeliveryDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail
    {
        return $this->saturdayDeliveryDetail;
    }
    /**
     * These are service elements for Saturday Delivery special service.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail $saturdayDeliveryDetail
     *
     * @return self
     */
    public function setSaturdayDeliveryDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail $saturdayDeliveryDetail) : self
    {
        $this->initialized['saturdayDeliveryDetail'] = true;
        $this->saturdayDeliveryDetail = $saturdayDeliveryDetail;
        return $this;
    }
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail
     */
    public function getHoldAtLocationDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail
    {
        return $this->holdAtLocationDetail;
    }
    /**
     * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail $holdAtLocationDetail
     *
     * @return self
     */
    public function setHoldAtLocationDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedholdAtLocationDetail $holdAtLocationDetail) : self
    {
        $this->initialized['holdAtLocationDetail'] = true;
        $this->holdAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
    * Conditional <br>
    For Express-only COD, populate this object for COD detail information at the shipment level.  When data is provided in this object, the related COD enum will be populated automatically by RATC
    *
    * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail
    */
    public function getCodDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail
    {
        return $this->codDetail;
    }
    /**
    * Conditional <br>
    For Express-only COD, populate this object for COD detail information at the shipment level.  When data is provided in this object, the related COD enum will be populated automatically by RATC
    *
    * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail $codDetail
    *
    * @return self
    */
    public function setCodDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedcodDetail $codDetail) : self
    {
        $this->initialized['codDetail'] = true;
        $this->codDetail = $codDetail;
        return $this;
    }
    /**
     * This is the descriptive data required for the FedEx shipment containing dangerous materials. This element is required when SpecialServicetype DRY_ICE is selected in SpecialServicetype collection.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail
     */
    public function getShipmentDryIceDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail
    {
        return $this->shipmentDryIceDetail;
    }
    /**
     * This is the descriptive data required for the FedEx shipment containing dangerous materials. This element is required when SpecialServicetype DRY_ICE is selected in SpecialServicetype collection.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail $shipmentDryIceDetail
     *
     * @return self
     */
    public function setShipmentDryIceDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedshipmentDryIceDetail $shipmentDryIceDetail) : self
    {
        $this->initialized['shipmentDryIceDetail'] = true;
        $this->shipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail
     */
    public function getFreightDirectDetail() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail
    {
        return $this->freightDirectDetail;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail $freightDirectDetail
     *
     * @return self
     */
    public function setFreightDirectDetail(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail $freightDirectDetail) : self
    {
        $this->initialized['freightDirectDetail'] = true;
        $this->freightDirectDetail = $freightDirectDetail;
        return $this;
    }
}