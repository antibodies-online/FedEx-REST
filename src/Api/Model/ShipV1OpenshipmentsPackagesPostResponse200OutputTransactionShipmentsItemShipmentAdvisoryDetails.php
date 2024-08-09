<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetails extends \ArrayObject
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
     * Indicates the regulatory advisory details.
     *
     * @var ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    protected $regulatoryAdvisory;
    /**
     * Indicates the regulatory advisory details.
     *
     * @return ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
     */
    public function getRegulatoryAdvisory(): ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory
    {
        return $this->regulatoryAdvisory;
    }
    /**
     * Indicates the regulatory advisory details.
     *
     * @param ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory
     *
     * @return self
     */
    public function setRegulatoryAdvisory(ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory $regulatoryAdvisory): self
    {
        $this->initialized['regulatoryAdvisory'] = true;
        $this->regulatoryAdvisory = $regulatoryAdvisory;
        return $this;
    }
}