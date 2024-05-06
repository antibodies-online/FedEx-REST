<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServices extends \ArrayObject
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
     * Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Indicates the details of freight guarantee.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail
     */
    protected $freightGuaranteeDetail;
    /**
     * This is the shipment level COD detail.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail
     */
    protected $shipmentCODDetail;
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail
     */
    protected $freightDirectDetail;
    /**
     * Indicates shipment to be sent at a specific time, on a specific date, or sometime within a specific date range.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail
     */
    protected $customDeliveryWindowDetail;
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
    /**
     * Indicates the details of freight guarantee.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail
    {
        return $this->freightGuaranteeDetail;
    }
    /**
     * Indicates the details of freight guarantee.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail $freightGuaranteeDetail
     *
     * @return self
     */
    public function setFreightGuaranteeDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail $freightGuaranteeDetail) : self
    {
        $this->initialized['freightGuaranteeDetail'] = true;
        $this->freightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail
     */
    public function getShipmentCODDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail
    {
        return $this->shipmentCODDetail;
    }
    /**
     * This is the shipment level COD detail.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail
     *
     * @return self
     */
    public function setShipmentCODDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesShipmentCODDetail $shipmentCODDetail) : self
    {
        $this->initialized['shipmentCODDetail'] = true;
        $this->shipmentCODDetail = $shipmentCODDetail;
        return $this;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail
     */
    public function getFreightDirectDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail
    {
        return $this->freightDirectDetail;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail $freightDirectDetail
     *
     * @return self
     */
    public function setFreightDirectDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail $freightDirectDetail) : self
    {
        $this->initialized['freightDirectDetail'] = true;
        $this->freightDirectDetail = $freightDirectDetail;
        return $this;
    }
    /**
     * Indicates shipment to be sent at a specific time, on a specific date, or sometime within a specific date range.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail
     */
    public function getCustomDeliveryWindowDetail() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail
    {
        return $this->customDeliveryWindowDetail;
    }
    /**
     * Indicates shipment to be sent at a specific time, on a specific date, or sometime within a specific date range.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail $customDeliveryWindowDetail
     *
     * @return self
     */
    public function setCustomDeliveryWindowDetail(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail $customDeliveryWindowDetail) : self
    {
        $this->initialized['customDeliveryWindowDetail'] = true;
        $this->customDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
}