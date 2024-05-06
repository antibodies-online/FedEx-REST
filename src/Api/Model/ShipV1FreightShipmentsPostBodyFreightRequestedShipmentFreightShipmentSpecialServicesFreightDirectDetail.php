<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetail extends \ArrayObject
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
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetailFreightDirectDataDetailsItem>
     */
    protected $freightDirectDataDetails;
    /**
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetailFreightDirectDataDetailsItem>
     */
    public function getFreightDirectDataDetails() : array
    {
        return $this->freightDirectDataDetails;
    }
    /**
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightDirectDetailFreightDirectDataDetailsItem> $freightDirectDataDetails
     *
     * @return self
     */
    public function setFreightDirectDataDetails(array $freightDirectDataDetails) : self
    {
        $this->initialized['freightDirectDataDetails'] = true;
        $this->freightDirectDataDetails = $freightDirectDataDetails;
        return $this;
    }
}