<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem extends \ArrayObject
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
     * Indicates the weight types used in calculating this rate, such as actual weight or dimensional weight.<br> Example: DIM
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * The sum of all freight discounts for this package.<br>Example: 44.55
     *
     * @var float
     */
    protected $totalFreightDiscounts;
    /**
     * The sum of all taxes on this package.<br>Example: 3.45
     *
     * @var float
     */
    protected $totalTaxes;
    /**
     * Indicates the minumum charge type. INTERNAL FEDEX USE ONLY.
     *
     * @var string
     */
    protected $minimumChargeType;
    /**
     * The package transportation charge(prior to any discounts applied).<br>Example: 45.67
     *
     * @var float
     */
    protected $baseCharge;
    /**
     * Specifies total rebates on this package.<br>Example: 4.56
     *
     * @var float
     */
    protected $totalRebates;
    /**
     * This is the rate type used.<br>Example: PAYOR_RETAIL_PACKAGE
     *
     * @var string
     */
    protected $rateType;
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight
     */
    protected $billingWeight;
    /**
     * This is the net freight charges. i.e. base charge minus total freight discounts for a package.<br>Example: 4.89
     *
     * @var float
     */
    protected $netFreight;
    /**
     * These are all surcharges on this package.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemSurchargesItem>
     */
    protected $surcharges;
    /**
     * The sum of all surcharges on this package.<br>Example: 22.56
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * This is sum of net freight and total surcharges (not including totalTaxes) for this package.<br>Example: 12.56
     *
     * @var float
     */
    protected $netFedExCharge;
    /**
     * This is the sum of net freight, total surcharges and total taxes for a package.<br>Example: 121.56
     *
     * @var float
     */
    protected $netCharge;
    /**
     * This is the currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Indicates the weight types used in calculating this rate, such as actual weight or dimensional weight.<br> Example: DIM
     *
     * @return string
     */
    public function getRatedWeightMethod() : string
    {
        return $this->ratedWeightMethod;
    }
    /**
     * Indicates the weight types used in calculating this rate, such as actual weight or dimensional weight.<br> Example: DIM
     *
     * @param string $ratedWeightMethod
     *
     * @return self
     */
    public function setRatedWeightMethod(string $ratedWeightMethod) : self
    {
        $this->initialized['ratedWeightMethod'] = true;
        $this->ratedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    /**
     * The sum of all freight discounts for this package.<br>Example: 44.55
     *
     * @return float
     */
    public function getTotalFreightDiscounts() : float
    {
        return $this->totalFreightDiscounts;
    }
    /**
     * The sum of all freight discounts for this package.<br>Example: 44.55
     *
     * @param float $totalFreightDiscounts
     *
     * @return self
     */
    public function setTotalFreightDiscounts(float $totalFreightDiscounts) : self
    {
        $this->initialized['totalFreightDiscounts'] = true;
        $this->totalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * The sum of all taxes on this package.<br>Example: 3.45
     *
     * @return float
     */
    public function getTotalTaxes() : float
    {
        return $this->totalTaxes;
    }
    /**
     * The sum of all taxes on this package.<br>Example: 3.45
     *
     * @param float $totalTaxes
     *
     * @return self
     */
    public function setTotalTaxes(float $totalTaxes) : self
    {
        $this->initialized['totalTaxes'] = true;
        $this->totalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Indicates the minumum charge type. INTERNAL FEDEX USE ONLY.
     *
     * @return string
     */
    public function getMinimumChargeType() : string
    {
        return $this->minimumChargeType;
    }
    /**
     * Indicates the minumum charge type. INTERNAL FEDEX USE ONLY.
     *
     * @param string $minimumChargeType
     *
     * @return self
     */
    public function setMinimumChargeType(string $minimumChargeType) : self
    {
        $this->initialized['minimumChargeType'] = true;
        $this->minimumChargeType = $minimumChargeType;
        return $this;
    }
    /**
     * The package transportation charge(prior to any discounts applied).<br>Example: 45.67
     *
     * @return float
     */
    public function getBaseCharge() : float
    {
        return $this->baseCharge;
    }
    /**
     * The package transportation charge(prior to any discounts applied).<br>Example: 45.67
     *
     * @param float $baseCharge
     *
     * @return self
     */
    public function setBaseCharge(float $baseCharge) : self
    {
        $this->initialized['baseCharge'] = true;
        $this->baseCharge = $baseCharge;
        return $this;
    }
    /**
     * Specifies total rebates on this package.<br>Example: 4.56
     *
     * @return float
     */
    public function getTotalRebates() : float
    {
        return $this->totalRebates;
    }
    /**
     * Specifies total rebates on this package.<br>Example: 4.56
     *
     * @param float $totalRebates
     *
     * @return self
     */
    public function setTotalRebates(float $totalRebates) : self
    {
        $this->initialized['totalRebates'] = true;
        $this->totalRebates = $totalRebates;
        return $this;
    }
    /**
     * This is the rate type used.<br>Example: PAYOR_RETAIL_PACKAGE
     *
     * @return string
     */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
     * This is the rate type used.<br>Example: PAYOR_RETAIL_PACKAGE
     *
     * @param string $rateType
     *
     * @return self
     */
    public function setRateType(string $rateType) : self
    {
        $this->initialized['rateType'] = true;
        $this->rateType = $rateType;
        return $this;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @return ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight
     */
    public function getBillingWeight() : ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight
    {
        return $this->billingWeight;
    }
    /**
     * These are the package weight details.<br>Note: Weight is not required for One rate shipments
     *
     * @param ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight $billingWeight
     *
     * @return self
     */
    public function setBillingWeight(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight $billingWeight) : self
    {
        $this->initialized['billingWeight'] = true;
        $this->billingWeight = $billingWeight;
        return $this;
    }
    /**
     * This is the net freight charges. i.e. base charge minus total freight discounts for a package.<br>Example: 4.89
     *
     * @return float
     */
    public function getNetFreight() : float
    {
        return $this->netFreight;
    }
    /**
     * This is the net freight charges. i.e. base charge minus total freight discounts for a package.<br>Example: 4.89
     *
     * @param float $netFreight
     *
     * @return self
     */
    public function setNetFreight(float $netFreight) : self
    {
        $this->initialized['netFreight'] = true;
        $this->netFreight = $netFreight;
        return $this;
    }
    /**
     * These are all surcharges on this package.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemSurchargesItem>
     */
    public function getSurcharges() : array
    {
        return $this->surcharges;
    }
    /**
     * These are all surcharges on this package.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemSurchargesItem> $surcharges
     *
     * @return self
     */
    public function setSurcharges(array $surcharges) : self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;
        return $this;
    }
    /**
     * The sum of all surcharges on this package.<br>Example: 22.56
     *
     * @return float
     */
    public function getTotalSurcharges() : float
    {
        return $this->totalSurcharges;
    }
    /**
     * The sum of all surcharges on this package.<br>Example: 22.56
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
     * This is sum of net freight and total surcharges (not including totalTaxes) for this package.<br>Example: 12.56
     *
     * @return float
     */
    public function getNetFedExCharge() : float
    {
        return $this->netFedExCharge;
    }
    /**
     * This is sum of net freight and total surcharges (not including totalTaxes) for this package.<br>Example: 12.56
     *
     * @param float $netFedExCharge
     *
     * @return self
     */
    public function setNetFedExCharge(float $netFedExCharge) : self
    {
        $this->initialized['netFedExCharge'] = true;
        $this->netFedExCharge = $netFedExCharge;
        return $this;
    }
    /**
     * This is the sum of net freight, total surcharges and total taxes for a package.<br>Example: 121.56
     *
     * @return float
     */
    public function getNetCharge() : float
    {
        return $this->netCharge;
    }
    /**
     * This is the sum of net freight, total surcharges and total taxes for a package.<br>Example: 121.56
     *
     * @param float $netCharge
     *
     * @return self
     */
    public function setNetCharge(float $netCharge) : self
    {
        $this->initialized['netCharge'] = true;
        $this->netCharge = $netCharge;
        return $this;
    }
    /**
     * This is the currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * This is the currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
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
}