<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequested extends \ArrayObject
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
     * Specifies the freight guarantee detail.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightGuaranteeDetail
     */
    protected $freightGuaranteeDetail;
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightDirectDetail
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
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail(): PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightGuaranteeDetail
    {
        return $this->freightGuaranteeDetail;
    }
    /**
     * Specifies the freight guarantee detail.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightGuaranteeDetail $freightGuaranteeDetail
     *
     * @return self
     */
    public function setFreightGuaranteeDetail(PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightGuaranteeDetail $freightGuaranteeDetail): self
    {
        $this->initialized['freightGuaranteeDetail'] = true;
        $this->freightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightDirectDetail
     */
    public function getFreightDirectDetail(): PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightDirectDetail
    {
        return $this->freightDirectDetail;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightDirectDetail $freightDirectDetail
     *
     * @return self
     */
    public function setFreightDirectDetail(PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetailShipmentSpecialServicesRequestedfreightDirectDetail $freightDirectDetail): self
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
    public function getSpecialServiceTypes(): array
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
    public function setSpecialServiceTypes(array $specialServiceTypes): self
    {
        $this->initialized['specialServiceTypes'] = true;
        $this->specialServiceTypes = $specialServiceTypes;
        return $this;
    }
}