<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails extends \ArrayObject
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
     * Indicates the regulatory advisory details.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    protected $regulatoryAdvisory;
    /**
     * Indicates the regulatory advisory details.
     *
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    public function getRegulatoryAdvisory() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
    {
        return $this->regulatoryAdvisory;
    }
    /**
     * Indicates the regulatory advisory details.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory
     *
     * @return self
     */
    public function setRegulatoryAdvisory(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory) : self
    {
        $this->initialized['regulatoryAdvisory'] = true;
        $this->regulatoryAdvisory = $regulatoryAdvisory;
        return $this;
    }
}