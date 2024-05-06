<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemAdditionalMeasuresItem extends \ArrayObject
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
     * Specify commodity quantity.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @var string
     */
    protected $units;
    /**
     * Specify commodity quantity.
     *
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->quantity;
    }
    /**
     * Specify commodity quantity.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * Unit of measure used to express the quantity of this commodity line item.
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