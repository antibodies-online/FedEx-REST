<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItem extends \ArrayObject
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
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.<br>Example: 2.0
     *
     * @var float
     */
    protected $qvalue;
    /**
     * Indicates the details of the hazardous commodities in the completed package.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem>
     */
    protected $hazardousCommodities;
    /**
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.<br>Example: 2.0
     *
     * @return float
     */
    public function getQvalue() : float
    {
        return $this->qvalue;
    }
    /**
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.<br>Example: 2.0
     *
     * @param float $qvalue
     *
     * @return self
     */
    public function setQvalue(float $qvalue) : self
    {
        $this->initialized['qvalue'] = true;
        $this->qvalue = $qvalue;
        return $this;
    }
    /**
     * Indicates the details of the hazardous commodities in the completed package.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem>
     */
    public function getHazardousCommodities() : array
    {
        return $this->hazardousCommodities;
    }
    /**
     * Indicates the details of the hazardous commodities in the completed package.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItem> $hazardousCommodities
     *
     * @return self
     */
    public function setHazardousCommodities(array $hazardousCommodities) : self
    {
        $this->initialized['hazardousCommodities'] = true;
        $this->hazardousCommodities = $hazardousCommodities;
        return $this;
    }
}