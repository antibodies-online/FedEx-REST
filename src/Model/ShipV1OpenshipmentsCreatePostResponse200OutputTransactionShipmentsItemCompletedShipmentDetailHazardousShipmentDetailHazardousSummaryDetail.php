<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailHazardousShipmentDetailHazardousSummaryDetail extends \ArrayObject
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
     * Specifies the total number of packages containing hazardous commodities in small exceptions.<br>Example: 10
     *
     * @var int
     */
    protected $smallQuantityExceptionPackageCount;
    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.<br>Example: 10
     *
     * @return int
     */
    public function getSmallQuantityExceptionPackageCount() : int
    {
        return $this->smallQuantityExceptionPackageCount;
    }
    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.<br>Example: 10
     *
     * @param int $smallQuantityExceptionPackageCount
     *
     * @return self
     */
    public function setSmallQuantityExceptionPackageCount(int $smallQuantityExceptionPackageCount) : self
    {
        $this->initialized['smallQuantityExceptionPackageCount'] = true;
        $this->smallQuantityExceptionPackageCount = $smallQuantityExceptionPackageCount;
        return $this;
    }
}