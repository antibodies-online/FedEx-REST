<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem extends \ArrayObject
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
     * Specifies the amount.<br>Example: 8.9
     *
     * @var float
     */
    protected $amount;
    /**
     * The type of rate discount. <br/> Valid Values are BONUS, COUPON,EARNED,OTHER,VOLUME.<br>Example: COUPON
     *
     * @var string
     */
    protected $rateDiscountType;
    /**
     * Specifies the percentage of Rate discount.<br>Example: 28.9
     *
     * @var float
     */
    protected $percent;
    /**
     * Specifies the description of the discounted rate.<br>Example: description
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the amount.<br>Example: 8.9
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies the amount.<br>Example: 8.9
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
     * The type of rate discount. <br/> Valid Values are BONUS, COUPON,EARNED,OTHER,VOLUME.<br>Example: COUPON
     *
     * @return string
     */
    public function getRateDiscountType() : string
    {
        return $this->rateDiscountType;
    }
    /**
     * The type of rate discount. <br/> Valid Values are BONUS, COUPON,EARNED,OTHER,VOLUME.<br>Example: COUPON
     *
     * @param string $rateDiscountType
     *
     * @return self
     */
    public function setRateDiscountType(string $rateDiscountType) : self
    {
        $this->initialized['rateDiscountType'] = true;
        $this->rateDiscountType = $rateDiscountType;
        return $this;
    }
    /**
     * Specifies the percentage of Rate discount.<br>Example: 28.9
     *
     * @return float
     */
    public function getPercent() : float
    {
        return $this->percent;
    }
    /**
     * Specifies the percentage of Rate discount.<br>Example: 28.9
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
    /**
     * Specifies the description of the discounted rate.<br>Example: description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the description of the discounted rate.<br>Example: description
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
}