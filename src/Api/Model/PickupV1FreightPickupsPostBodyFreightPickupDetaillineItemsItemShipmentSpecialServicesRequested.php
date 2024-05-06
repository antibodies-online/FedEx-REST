<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequested extends \ArrayObject
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
     * Specifies the freight guarantee detail.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail
     */
    protected $freightGuaranteeDetail;
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @var PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail
     */
    protected $freightDirectDetail;
    /**
     * Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Specifies the freight guarantee detail.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail
    {
        return $this->freightGuaranteeDetail;
    }
    /**
     * Specifies the freight guarantee detail.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail $freightGuaranteeDetail
     *
     * @return self
     */
    public function setFreightGuaranteeDetail(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightGuaranteeDetail $freightGuaranteeDetail) : self
    {
        $this->initialized['freightGuaranteeDetail'] = true;
        $this->freightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @return PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail
     */
    public function getFreightDirectDetail() : PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail
    {
        return $this->freightDirectDetail;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @param PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail $freightDirectDetail
     *
     * @return self
     */
    public function setFreightDirectDetail(PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail $freightDirectDetail) : self
    {
        $this->initialized['freightDirectDetail'] = true;
        $this->freightDirectDetail = $freightDirectDetail;
        return $this;
    }
    /**
     * Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
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
}