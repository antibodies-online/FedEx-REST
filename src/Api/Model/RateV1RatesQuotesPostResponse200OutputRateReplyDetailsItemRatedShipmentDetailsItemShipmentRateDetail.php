<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail extends \ArrayObject
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
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailCurrencyExchangeRate
     */
    protected $currencyExchangeRate;
    /**
     * Indicates the currency associated with the amount.
     *
     * @var string
     */
    protected $currency;
    /**
     * Indicates the rate zone used.
     *
     * @var string
     */
    protected $rateZone;
    /**
     * Is a RatingBasisType.
     *
     * @var string
     */
    protected $ratingBasis;
    /**
     * Indicates the type of pricing code.
     *
     * @var string
     */
    protected $pricingCode;
    /**
     * Indicates the total discounts used in the rate calculation. Example: 856.32
     *
     * @var float
     */
    protected $totalFreightDiscount;
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @var list<string>
     */
    protected $specialRatingApplied;
    /**
     * This is sum of all surcharges on the package. Example: 586.25
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * This is total discount used in the rate calculation.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailFreightDiscountItem>
     */
    protected $freightDiscount;
    /**
     * This is fuel surcharge percentage.
     *
     * @var float
     */
    protected $fuelSurchargePercent;
    /**
     * This is total of billing weight for the shipment.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalBillingWeight
     */
    protected $totalBillingWeight;
    /**
     * This is total of dimensional weight for the shipment.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight
     */
    protected $totalDimWeight;
    /**
     * Identifies the type of divisor applied.
     *
     * @var int
     */
    protected $dimDivisor;
    /**
     * Indicates the surcharges applied to this shipment.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailSurChargesItem>
     */
    protected $surCharges;
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailCurrencyExchangeRate
    {
        return $this->currencyExchangeRate;
    }
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailCurrencyExchangeRate $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailCurrencyExchangeRate $currencyExchangeRate) : self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * Indicates the currency associated with the amount.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Indicates the currency associated with the amount.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * Indicates the rate zone used.
     *
     * @return string
     */
    public function getRateZone() : string
    {
        return $this->rateZone;
    }
    /**
     * Indicates the rate zone used.
     *
     * @param string $rateZone
     *
     * @return self
     */
    public function setRateZone(string $rateZone) : self
    {
        $this->initialized['rateZone'] = true;
        $this->rateZone = $rateZone;
        return $this;
    }
    /**
     * Is a RatingBasisType.
     *
     * @return string
     */
    public function getRatingBasis() : string
    {
        return $this->ratingBasis;
    }
    /**
     * Is a RatingBasisType.
     *
     * @param string $ratingBasis
     *
     * @return self
     */
    public function setRatingBasis(string $ratingBasis) : self
    {
        $this->initialized['ratingBasis'] = true;
        $this->ratingBasis = $ratingBasis;
        return $this;
    }
    /**
     * Indicates the type of pricing code.
     *
     * @return string
     */
    public function getPricingCode() : string
    {
        return $this->pricingCode;
    }
    /**
     * Indicates the type of pricing code.
     *
     * @param string $pricingCode
     *
     * @return self
     */
    public function setPricingCode(string $pricingCode) : self
    {
        $this->initialized['pricingCode'] = true;
        $this->pricingCode = $pricingCode;
        return $this;
    }
    /**
     * Indicates the total discounts used in the rate calculation. Example: 856.32
     *
     * @return float
     */
    public function getTotalFreightDiscount() : float
    {
        return $this->totalFreightDiscount;
    }
    /**
     * Indicates the total discounts used in the rate calculation. Example: 856.32
     *
     * @param float $totalFreightDiscount
     *
     * @return self
     */
    public function setTotalFreightDiscount(float $totalFreightDiscount) : self
    {
        $this->initialized['totalFreightDiscount'] = true;
        $this->totalFreightDiscount = $totalFreightDiscount;
        return $this;
    }
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @return list<string>
     */
    public function getSpecialRatingApplied() : array
    {
        return $this->specialRatingApplied;
    }
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @param list<string> $specialRatingApplied
     *
     * @return self
     */
    public function setSpecialRatingApplied(array $specialRatingApplied) : self
    {
        $this->initialized['specialRatingApplied'] = true;
        $this->specialRatingApplied = $specialRatingApplied;
        return $this;
    }
    /**
     * This is sum of all surcharges on the package. Example: 586.25
     *
     * @return float
     */
    public function getTotalSurcharges() : float
    {
        return $this->totalSurcharges;
    }
    /**
     * This is sum of all surcharges on the package. Example: 586.25
     *
     * @param float $totalSurcharges
     *
     * @return self
     */
    public function setTotalSurcharges(float $totalSurcharges) : self
    {
        $this->initialized['totalSurcharges'] = true;
        $this->totalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * This is total discount used in the rate calculation.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailFreightDiscountItem>
     */
    public function getFreightDiscount() : array
    {
        return $this->freightDiscount;
    }
    /**
     * This is total discount used in the rate calculation.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailFreightDiscountItem> $freightDiscount
     *
     * @return self
     */
    public function setFreightDiscount(array $freightDiscount) : self
    {
        $this->initialized['freightDiscount'] = true;
        $this->freightDiscount = $freightDiscount;
        return $this;
    }
    /**
     * This is fuel surcharge percentage.
     *
     * @return float
     */
    public function getFuelSurchargePercent() : float
    {
        return $this->fuelSurchargePercent;
    }
    /**
     * This is fuel surcharge percentage.
     *
     * @param float $fuelSurchargePercent
     *
     * @return self
     */
    public function setFuelSurchargePercent(float $fuelSurchargePercent) : self
    {
        $this->initialized['fuelSurchargePercent'] = true;
        $this->fuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    /**
     * This is total of billing weight for the shipment.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalBillingWeight
     */
    public function getTotalBillingWeight() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalBillingWeight
    {
        return $this->totalBillingWeight;
    }
    /**
     * This is total of billing weight for the shipment.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalBillingWeight $totalBillingWeight
     *
     * @return self
     */
    public function setTotalBillingWeight(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalBillingWeight $totalBillingWeight) : self
    {
        $this->initialized['totalBillingWeight'] = true;
        $this->totalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * This is total of dimensional weight for the shipment.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight
     */
    public function getTotalDimWeight() : RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight
    {
        return $this->totalDimWeight;
    }
    /**
     * This is total of dimensional weight for the shipment.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight $totalDimWeight
     *
     * @return self
     */
    public function setTotalDimWeight(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight $totalDimWeight) : self
    {
        $this->initialized['totalDimWeight'] = true;
        $this->totalDimWeight = $totalDimWeight;
        return $this;
    }
    /**
     * Identifies the type of divisor applied.
     *
     * @return int
     */
    public function getDimDivisor() : int
    {
        return $this->dimDivisor;
    }
    /**
     * Identifies the type of divisor applied.
     *
     * @param int $dimDivisor
     *
     * @return self
     */
    public function setDimDivisor(int $dimDivisor) : self
    {
        $this->initialized['dimDivisor'] = true;
        $this->dimDivisor = $dimDivisor;
        return $this;
    }
    /**
     * Indicates the surcharges applied to this shipment.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailSurChargesItem>
     */
    public function getSurCharges() : array
    {
        return $this->surCharges;
    }
    /**
     * Indicates the surcharges applied to this shipment.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailSurChargesItem> $surCharges
     *
     * @return self
     */
    public function setSurCharges(array $surCharges) : self
    {
        $this->initialized['surCharges'] = true;
        $this->surCharges = $surCharges;
        return $this;
    }
}