<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsInnerReceptaclesItemQuantity extends \ArrayObject
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
     * Specifies which measure of quantity is to be validated.
     *
     * @var string
     */
    protected $quantityType;
    /**
     * Number of units of the type below.<br>Example: 34.56
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies the units.<br>Example: KG
     *
     * @var string
     */
    protected $units;
    /**
     * Specifies which measure of quantity is to be validated.
     *
     * @return string
     */
    public function getQuantityType() : string
    {
        return $this->quantityType;
    }
    /**
     * Specifies which measure of quantity is to be validated.
     *
     * @param string $quantityType
     *
     * @return self
     */
    public function setQuantityType(string $quantityType) : self
    {
        $this->initialized['quantityType'] = true;
        $this->quantityType = $quantityType;
        return $this;
    }
    /**
     * Number of units of the type below.<br>Example: 34.56
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Number of units of the type below.<br>Example: 34.56
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
     * Specifies the units.<br>Example: KG
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Specifies the units.<br>Example: KG
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
}