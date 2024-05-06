<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServices extends \ArrayObject
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
     * Specifies Freight Guarantee Detail Model.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail
     */
    protected $freightGuaranteeDetail;
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     *
     * @var list<string>
     */
    protected $specialServiceTypes;
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @var RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail
     */
    protected $freightDirectDetail;
    /**
     * Specifies Freight Guarantee Detail Model.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail
    {
        return $this->freightGuaranteeDetail;
    }
    /**
     * Specifies Freight Guarantee Detail Model.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail $freightGuaranteeDetail
     *
     * @return self
     */
    public function setFreightGuaranteeDetail(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightGuaranteeDetail $freightGuaranteeDetail) : self
    {
        $this->initialized['freightGuaranteeDetail'] = true;
        $this->freightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     *
     * @return list<string>
     */
    public function getSpecialServiceTypes() : array
    {
        return $this->specialServiceTypes;
    }
    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
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
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @return RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail
     */
    public function getFreightDirectDetail() : RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail
    {
        return $this->freightDirectDetail;
    }
    /**
     * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     *
     * @param RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail $freightDirectDetail
     *
     * @return self
     */
    public function setFreightDirectDetail(RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail $freightDirectDetail) : self
    {
        $this->initialized['freightDirectDetail'] = true;
        $this->freightDirectDetail = $freightDirectDetail;
        return $this;
    }
}