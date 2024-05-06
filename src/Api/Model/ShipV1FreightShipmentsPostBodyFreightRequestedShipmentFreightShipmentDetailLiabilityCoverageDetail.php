<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetail extends \ArrayObject
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
     * This is the liability coverage type.
     *
     * @var string
     */
    protected $coverageType;
    /**
     * Indicate the coverage amount.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetailCoverageAmount
     */
    protected $coverageAmount;
    /**
     * This is the liability coverage type.
     *
     * @return string
     */
    public function getCoverageType() : string
    {
        return $this->coverageType;
    }
    /**
     * This is the liability coverage type.
     *
     * @param string $coverageType
     *
     * @return self
     */
    public function setCoverageType(string $coverageType) : self
    {
        $this->initialized['coverageType'] = true;
        $this->coverageType = $coverageType;
        return $this;
    }
    /**
     * Indicate the coverage amount.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetailCoverageAmount
     */
    public function getCoverageAmount() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetailCoverageAmount
    {
        return $this->coverageAmount;
    }
    /**
     * Indicate the coverage amount.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetailCoverageAmount $coverageAmount
     *
     * @return self
     */
    public function setCoverageAmount(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailLiabilityCoverageDetailCoverageAmount $coverageAmount) : self
    {
        $this->initialized['coverageAmount'] = true;
        $this->coverageAmount = $coverageAmount;
        return $this;
    }
}