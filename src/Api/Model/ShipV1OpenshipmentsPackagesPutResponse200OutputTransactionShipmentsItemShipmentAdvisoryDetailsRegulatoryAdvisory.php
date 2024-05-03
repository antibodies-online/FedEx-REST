<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisory extends \ArrayObject
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
     * Indicates the Commodity clarifications.
     *
     * @var list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItem>
     */
    protected $commodityClarifications;
    /**
     * It is a regulatory probitions.
     *
     * @var list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem>
     */
    protected $prohibitions;
    /**
     * Indicates the Commodity clarifications.
     *
     * @return list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItem>
     */
    public function getCommodityClarifications() : array
    {
        return $this->commodityClarifications;
    }
    /**
     * Indicates the Commodity clarifications.
     *
     * @param list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryCommodityClarificationsItem> $commodityClarifications
     *
     * @return self
     */
    public function setCommodityClarifications(array $commodityClarifications) : self
    {
        $this->initialized['commodityClarifications'] = true;
        $this->commodityClarifications = $commodityClarifications;
        return $this;
    }
    /**
     * It is a regulatory probitions.
     *
     * @return list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem>
     */
    public function getProhibitions() : array
    {
        return $this->prohibitions;
    }
    /**
     * It is a regulatory probitions.
     *
     * @param list<ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemShipmentAdvisoryDetailsRegulatoryAdvisoryProhibitionsItem> $prohibitions
     *
     * @return self
     */
    public function setProhibitions(array $prohibitions) : self
    {
        $this->initialized['prohibitions'] = true;
        $this->prohibitions = $prohibitions;
        return $this;
    }
}