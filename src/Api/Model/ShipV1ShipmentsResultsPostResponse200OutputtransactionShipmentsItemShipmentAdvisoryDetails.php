<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetails extends \ArrayObject
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
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    protected $regulatoryAdvisory;
    /**
     * Indicates the regulatory advisory details.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    public function getRegulatoryAdvisory() : ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
    {
        return $this->regulatoryAdvisory;
    }
    /**
     * Indicates the regulatory advisory details.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory
     *
     * @return self
     */
    public function setRegulatoryAdvisory(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory) : self
    {
        $this->initialized['regulatoryAdvisory'] = true;
        $this->regulatoryAdvisory = $regulatoryAdvisory;
        return $this;
    }
}