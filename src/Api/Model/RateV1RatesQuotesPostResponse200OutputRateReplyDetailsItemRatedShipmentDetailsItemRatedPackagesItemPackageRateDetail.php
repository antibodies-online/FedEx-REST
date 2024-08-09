<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetail extends \ArrayObject
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
     * Indicates which weight was used for the rate, e.g. actual or dimensional. <br> Example: dimensional
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * Specifies the sum of all taxes on this package.<br> Example: 1257.25
     *
     * @var float
     */
    protected $totalTaxes;
    /**
     * The total discounts used in the rate calculation.<br> Example: 1257.2<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var float
     */
    protected $totalFreightDiscounts;
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.<br> Example: 125
     *
     * @var float
     */
    protected $baseCharge;
    /**
     * The total sum of all rebates applied to this package.Example: 12
     *
     * @var float
     */
    protected $totalRebates;
    /**
     * Specifies the type used for this specific set of rate data.
     *
     * @var string
     */
    protected $rateType;
    /**
     * 
     *
     * @var mixed
     */
    protected $billingWeight;
    /**
     * Specifies the sum of freight charges.<br> Example: 10
     *
     * @var float
     */
    protected $netFreight;
    /**
     * Specifies the list of all surcharges that apply to this package.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailSurchargesItem>
     */
    protected $surcharges;
    /**
     * The sum of all surcharges on the package.<br> Example: 569
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * Specifies the sum of packages netFreight and totalSurcharges (not including totalTaxes).<br> Example: 125.32
     *
     * @var float
     */
    protected $netFedExCharge;
    /**
     * Specifies the sum of packages netFreight, totalSurcharges and totalTaxes. <br>Example: 563.98
     *
     * @var float
     */
    protected $netCharge;
    /**
     * All rate discounts that apply to this shipment.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailFreightDiscountsItem>
     */
    protected $freightDiscounts;
    /**
     * Indicates which weight was used for the rate, e.g. actual or dimensional. <br> Example: dimensional
     *
     * @return string
     */
    public function getRatedWeightMethod(): string
    {
        return $this->ratedWeightMethod;
    }
    /**
     * Indicates which weight was used for the rate, e.g. actual or dimensional. <br> Example: dimensional
     *
     * @param string $ratedWeightMethod
     *
     * @return self
     */
    public function setRatedWeightMethod(string $ratedWeightMethod): self
    {
        $this->initialized['ratedWeightMethod'] = true;
        $this->ratedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    /**
     * Specifies the sum of all taxes on this package.<br> Example: 1257.25
     *
     * @return float
     */
    public function getTotalTaxes(): float
    {
        return $this->totalTaxes;
    }
    /**
     * Specifies the sum of all taxes on this package.<br> Example: 1257.25
     *
     * @param float $totalTaxes
     *
     * @return self
     */
    public function setTotalTaxes(float $totalTaxes): self
    {
        $this->initialized['totalTaxes'] = true;
        $this->totalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * The total discounts used in the rate calculation.<br> Example: 1257.2<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return float
     */
    public function getTotalFreightDiscounts(): float
    {
        return $this->totalFreightDiscounts;
    }
    /**
     * The total discounts used in the rate calculation.<br> Example: 1257.2<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param float $totalFreightDiscounts
     *
     * @return self
     */
    public function setTotalFreightDiscounts(float $totalFreightDiscounts): self
    {
        $this->initialized['totalFreightDiscounts'] = true;
        $this->totalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.<br> Example: 125
     *
     * @return float
     */
    public function getBaseCharge(): float
    {
        return $this->baseCharge;
    }
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.<br> Example: 125
     *
     * @param float $baseCharge
     *
     * @return self
     */
    public function setBaseCharge(float $baseCharge): self
    {
        $this->initialized['baseCharge'] = true;
        $this->baseCharge = $baseCharge;
        return $this;
    }
    /**
     * The total sum of all rebates applied to this package.Example: 12
     *
     * @return float
     */
    public function getTotalRebates(): float
    {
        return $this->totalRebates;
    }
    /**
     * The total sum of all rebates applied to this package.Example: 12
     *
     * @param float $totalRebates
     *
     * @return self
     */
    public function setTotalRebates(float $totalRebates): self
    {
        $this->initialized['totalRebates'] = true;
        $this->totalRebates = $totalRebates;
        return $this;
    }
    /**
     * Specifies the type used for this specific set of rate data.
     *
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }
    /**
     * Specifies the type used for this specific set of rate data.
     *
     * @param string $rateType
     *
     * @return self
     */
    public function setRateType(string $rateType): self
    {
        $this->initialized['rateType'] = true;
        $this->rateType = $rateType;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBillingWeight()
    {
        return $this->billingWeight;
    }
    /**
     * 
     *
     * @param mixed $billingWeight
     *
     * @return self
     */
    public function setBillingWeight($billingWeight): self
    {
        $this->initialized['billingWeight'] = true;
        $this->billingWeight = $billingWeight;
        return $this;
    }
    /**
     * Specifies the sum of freight charges.<br> Example: 10
     *
     * @return float
     */
    public function getNetFreight(): float
    {
        return $this->netFreight;
    }
    /**
     * Specifies the sum of freight charges.<br> Example: 10
     *
     * @param float $netFreight
     *
     * @return self
     */
    public function setNetFreight(float $netFreight): self
    {
        $this->initialized['netFreight'] = true;
        $this->netFreight = $netFreight;
        return $this;
    }
    /**
     * Specifies the list of all surcharges that apply to this package.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailSurchargesItem>
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }
    /**
     * Specifies the list of all surcharges that apply to this package.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailSurchargesItem> $surcharges
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
     * The sum of all surcharges on the package.<br> Example: 569
     *
     * @return float
     */
    public function getTotalSurcharges(): float
    {
        return $this->totalSurcharges;
    }
    /**
     * The sum of all surcharges on the package.<br> Example: 569
     *
     * @param float $totalSurcharges
     *
     * @return self
     */
    public function setTotalSurcharges(float $totalSurcharges): self
    {
        $this->initialized['totalSurcharges'] = true;
        $this->totalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Specifies the sum of packages netFreight and totalSurcharges (not including totalTaxes).<br> Example: 125.32
     *
     * @return float
     */
    public function getNetFedExCharge(): float
    {
        return $this->netFedExCharge;
    }
    /**
     * Specifies the sum of packages netFreight and totalSurcharges (not including totalTaxes).<br> Example: 125.32
     *
     * @param float $netFedExCharge
     *
     * @return self
     */
    public function setNetFedExCharge(float $netFedExCharge): self
    {
        $this->initialized['netFedExCharge'] = true;
        $this->netFedExCharge = $netFedExCharge;
        return $this;
    }
    /**
     * Specifies the sum of packages netFreight, totalSurcharges and totalTaxes. <br>Example: 563.98
     *
     * @return float
     */
    public function getNetCharge(): float
    {
        return $this->netCharge;
    }
    /**
     * Specifies the sum of packages netFreight, totalSurcharges and totalTaxes. <br>Example: 563.98
     *
     * @param float $netCharge
     *
     * @return self
     */
    public function setNetCharge(float $netCharge): self
    {
        $this->initialized['netCharge'] = true;
        $this->netCharge = $netCharge;
        return $this;
    }
    /**
     * All rate discounts that apply to this shipment.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailFreightDiscountsItem>
     */
    public function getFreightDiscounts(): array
    {
        return $this->freightDiscounts;
    }
    /**
     * All rate discounts that apply to this shipment.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItemPackageRateDetailFreightDiscountsItem> $freightDiscounts
     *
     * @return self
     */
    public function setFreightDiscounts(array $freightDiscounts): self
    {
        $this->initialized['freightDiscounts'] = true;
        $this->freightDiscounts = $freightDiscounts;
        return $this;
    }
}