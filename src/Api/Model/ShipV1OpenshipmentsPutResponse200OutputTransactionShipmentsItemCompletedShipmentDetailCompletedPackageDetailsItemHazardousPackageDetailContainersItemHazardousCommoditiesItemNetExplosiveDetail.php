<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemNetExplosiveDetail extends \ArrayObject
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
     * Specifies amount.<br>Example: 10.0
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies net explosive units.<br>Example: units
     *
     * @var string
     */
    protected $units;
    /**
     * Specifies net explosive  classification type.<br>Example: NET_EXPLOSIVE_WEIGHT
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies amount.<br>Example: 10.0
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies amount.<br>Example: 10.0
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Specifies net explosive units.<br>Example: units
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Specifies net explosive units.<br>Example: units
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units) : self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
    /**
     * Specifies net explosive  classification type.<br>Example: NET_EXPLOSIVE_WEIGHT
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies net explosive  classification type.<br>Example: NET_EXPLOSIVE_WEIGHT
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}