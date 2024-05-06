<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostBodyCustomsClearanceDetailcommoditiesItemAdditionalMeasures extends \ArrayObject
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
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @var string
     */
    protected $uom;
    /**
     * Specify commodity quantity.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @return string
     */
    public function getUom() : string
    {
        return $this->uom;
    }
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @param string $uom
     *
     * @return self
     */
    public function setUom(string $uom) : self
    {
        $this->initialized['uom'] = true;
        $this->uom = $uom;
        return $this;
    }
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
}