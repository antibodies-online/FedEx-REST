<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentLegRateDetailsItemdiscountsItem extends \ArrayObject
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
     * Indicates the amount for the rate discount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Indicate the name of the discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates the description for the rate discount.
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates the type.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates the percentage of the rate discount.
     *
     * @var float
     */
    protected $percent;
    /**
     * Indicates the amount for the rate discount.
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Indicates the amount for the rate discount.
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
     * Indicate the name of the discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Indicate the name of the discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates the description for the rate discount.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Indicates the description for the rate discount.
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
     * Indicates the type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicates the type.
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
    /**
     * Indicates the percentage of the rate discount.
     *
     * @return float
     */
    public function getPercent() : float
    {
        return $this->percent;
    }
    /**
     * Indicates the percentage of the rate discount.
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent) : self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
}