<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies the list of discounts. <br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemdiscountsItem>
     */
    protected $discounts;
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @var string
     */
    protected $pricingCode;
    /**
     * Human-readable text describing the shipment leg.
     *
     * @var string
     */
    protected $legDescription;
    /**
     * Specifies the list of surcharges.<br>Valid value is:<li>PEAK</li><li>PEAK_ADDTIONAL_HANDLING</li><li>PEAK_OVERSIZE</li><li>PEAK_RESIDENTIAL_DELIVERY</li>
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemsurchargesItem>
     */
    protected $surcharges;
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @var list<string>
     */
    protected $specialRatingApplied;
    /**
     * Specifies the list of taxes.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem>
     */
    protected $taxes;
    /**
     * Indicates the rate scale used.
     *
     * @var string
     */
    protected $rateScale;
    /**
     * This shipment's totalNetCharge and totalDutiesTaxesAndFees. Some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @var float
     */
    protected $totalNetCharge;
    /**
     * Specifies the total base charge list
     *
     * @var float
     */
    protected $totalBaseCharge;
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate
     */
    protected $currencyExchangeRate;
    /**
     * Sum of billing weight for the shipment.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight
     */
    protected $totalBillingWeight;
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Specifies the list of discounts. <br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemdiscountsItem>
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     * Specifies the list of discounts. <br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemdiscountsItem> $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @return string
     */
    public function getPricingCode(): string
    {
        return $this->pricingCode;
    }
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @param string $pricingCode
     *
     * @return self
     */
    public function setPricingCode(string $pricingCode): self
    {
        $this->initialized['pricingCode'] = true;
        $this->pricingCode = $pricingCode;
        return $this;
    }
    /**
     * Human-readable text describing the shipment leg.
     *
     * @return string
     */
    public function getLegDescription(): string
    {
        return $this->legDescription;
    }
    /**
     * Human-readable text describing the shipment leg.
     *
     * @param string $legDescription
     *
     * @return self
     */
    public function setLegDescription(string $legDescription): self
    {
        $this->initialized['legDescription'] = true;
        $this->legDescription = $legDescription;
        return $this;
    }
    /**
     * Specifies the list of surcharges.<br>Valid value is:<li>PEAK</li><li>PEAK_ADDTIONAL_HANDLING</li><li>PEAK_OVERSIZE</li><li>PEAK_RESIDENTIAL_DELIVERY</li>
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemsurchargesItem>
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }
    /**
     * Specifies the list of surcharges.<br>Valid value is:<li>PEAK</li><li>PEAK_ADDTIONAL_HANDLING</li><li>PEAK_OVERSIZE</li><li>PEAK_RESIDENTIAL_DELIVERY</li>
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemsurchargesItem> $surcharges
     *
     * @return self
     */
    public function setSurcharges(array $surcharges): self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;
        return $this;
    }
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @return list<string>
     */
    public function getSpecialRatingApplied(): array
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
    public function setSpecialRatingApplied(array $specialRatingApplied): self
    {
        $this->initialized['specialRatingApplied'] = true;
        $this->specialRatingApplied = $specialRatingApplied;
        return $this;
    }
    /**
     * Specifies the list of taxes.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem>
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }
    /**
     * Specifies the list of taxes.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem> $taxes
     *
     * @return self
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Indicates the rate scale used.
     *
     * @return string
     */
    public function getRateScale(): string
    {
        return $this->rateScale;
    }
    /**
     * Indicates the rate scale used.
     *
     * @param string $rateScale
     *
     * @return self
     */
    public function setRateScale(string $rateScale): self
    {
        $this->initialized['rateScale'] = true;
        $this->rateScale = $rateScale;
        return $this;
    }
    /**
     * This shipment's totalNetCharge and totalDutiesTaxesAndFees. Some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @return float
     */
    public function getTotalNetCharge(): float
    {
        return $this->totalNetCharge;
    }
    /**
     * This shipment's totalNetCharge and totalDutiesTaxesAndFees. Some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param float $totalNetCharge
     *
     * @return self
     */
    public function setTotalNetCharge(float $totalNetCharge): self
    {
        $this->initialized['totalNetCharge'] = true;
        $this->totalNetCharge = $totalNetCharge;
        return $this;
    }
    /**
     * Specifies the total base charge list
     *
     * @return float
     */
    public function getTotalBaseCharge(): float
    {
        return $this->totalBaseCharge;
    }
    /**
     * Specifies the total base charge list
     *
     * @param float $totalBaseCharge
     *
     * @return self
     */
    public function setTotalBaseCharge(float $totalBaseCharge): self
    {
        $this->initialized['totalBaseCharge'] = true;
        $this->totalBaseCharge = $totalBaseCharge;
        return $this;
    }
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate
     */
    public function getCurrencyExchangeRate(): RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate
    {
        return $this->currencyExchangeRate;
    }
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemcurrencyExchangeRate $currencyExchangeRate): self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * Sum of billing weight for the shipment.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight
     */
    public function getTotalBillingWeight(): RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight
    {
        return $this->totalBillingWeight;
    }
    /**
     * Sum of billing weight for the shipment.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight $totalBillingWeight
     *
     * @return self
     */
    public function setTotalBillingWeight(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtotalBillingWeight $totalBillingWeight): self
    {
        $this->initialized['totalBillingWeight'] = true;
        $this->totalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}