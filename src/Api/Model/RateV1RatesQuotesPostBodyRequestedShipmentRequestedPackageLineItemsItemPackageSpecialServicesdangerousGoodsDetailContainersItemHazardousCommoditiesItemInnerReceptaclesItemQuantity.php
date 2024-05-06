<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentRequestedPackageLineItemsItemPackageSpecialServicesdangerousGoodsDetailContainersItemHazardousCommoditiesItemInnerReceptaclesItemQuantity extends \ArrayObject
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
     * Specifies type of a quantity unit.
     *
     * @var string
     */
    protected $quantityType;
    /**
     * Specifies amount details.
     *
     * @var float
     */
    protected $amount;
    /**
     * Specify unit details.
     *
     * @var string
     */
    protected $units;
    /**
     * Specifies type of a quantity unit.
     *
     * @return string
     */
    public function getQuantityType() : string
    {
        return $this->quantityType;
    }
    /**
     * Specifies type of a quantity unit.
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
     * Specifies amount details.
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies amount details.
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
     * Specify unit details.
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Specify unit details.
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