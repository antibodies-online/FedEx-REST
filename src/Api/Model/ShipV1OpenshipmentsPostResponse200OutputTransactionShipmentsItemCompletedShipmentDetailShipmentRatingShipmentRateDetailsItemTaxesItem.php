<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem extends \ArrayObject
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
     * Indicates the amount of tax.<br>Example: 10.0
     *
     * @var float
     */
    protected $amount;
    /**
     * Indicates the level of tax.
     *
     * @var string
     */
    protected $level;
    /**
     * Specifies the tax description.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the type of the tax.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates the amount of tax.<br>Example: 10.0
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Indicates the amount of tax.<br>Example: 10.0
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
     * Indicates the level of tax.
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * Indicates the level of tax.
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * Specifies the tax description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the tax description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specifies the type of the tax.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies the type of the tax.
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