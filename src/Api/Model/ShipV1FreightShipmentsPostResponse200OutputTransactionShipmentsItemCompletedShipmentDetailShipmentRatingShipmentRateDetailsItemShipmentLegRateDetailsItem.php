<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem extends \ArrayObject
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
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone
     *
     * @var string
     */
    protected $rateZone;
    /**
     * Specifies the Pricing Code.<br>Example: pricingCode
     *
     * @var string
     */
    protected $pricingCode;
    /**
     * Specifies the taxes.
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem>
     */
    protected $taxes;
    /**
     * Sum of dimensional weights for all packages.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight
     */
    protected $totalDimWeight;
    /**
     * Specifies the total rebate.<br>Example: 2.0
     *
     * @var float
     */
    protected $totalRebates;
    /**
     * Specifies a fuel surcharge percentage.<br>Example: 6.0
     *
     * @var float
     */
    protected $fuelSurchargePercent;
    /**
     * Specifies currency exchange rate.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate
     */
    protected $currencyExchangeRate;
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6
     *
     * @var int
     */
    protected $dimDivisor;
    /**
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE
     *
     * @var string
     */
    protected $rateType;
    /**
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA
     *
     * @var string
     */
    protected $legDestinationLocationId;
    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType
     *
     * @var string
     */
    protected $dimDivisorType;
    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0
     *
     * @var float
     */
    protected $totalBaseCharge;
    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * The sum of all discounts.<br>Example: 9.0
     *
     * @var float
     */
    protected $totalFreightDiscounts;
    /**
     * Total of the transportation-based taxes.<br>Example: 12.6
     *
     * @var float
     */
    protected $totalTaxes;
    /**
     * Specifies minimum charge type.
     *
     * @var string
     */
    protected $minimumChargeType;
    /**
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78
     *
     * @var float
     */
    protected $totalDutiesAndTaxes;
    /**
     * The freight charge minus discounts.<br>Example: 6.0
     *
     * @var float
     */
    protected $totalNetFreight;
    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2
     *
     * @var float
     */
    protected $totalNetFedExCharge;
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem>
     */
    protected $surcharges;
    /**
     * The total of all surcharges.<br>Example: 5.0
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * The weight used to calculate these rates.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight
     */
    protected $totalBillingWeight;
    /**
     * 
     *
     * @var list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem>
     */
    protected $freightDiscounts;
    /**
     * Indicates the rate scale used.<br>Example: 6702
     *
     * @var string
     */
    protected $rateScale;
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253
     *
     * @var float
     */
    protected $totalNetCharge;
    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67
     *
     * @var float
     */
    protected $totalNetChargeWithDutiesAndTaxes;
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone
     *
     * @return string
     */
    public function getRateZone() : string
    {
        return $this->rateZone;
    }
    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone
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
     * Specifies the Pricing Code.<br>Example: pricingCode
     *
     * @return string
     */
    public function getPricingCode() : string
    {
        return $this->pricingCode;
    }
    /**
     * Specifies the Pricing Code.<br>Example: pricingCode
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
     * Specifies the taxes.
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem>
     */
    public function getTaxes() : array
    {
        return $this->taxes;
    }
    /**
     * Specifies the taxes.
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem> $taxes
     *
     * @return self
     */
    public function setTaxes(array $taxes) : self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Sum of dimensional weights for all packages.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight
     */
    public function getTotalDimWeight() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight
    {
        return $this->totalDimWeight;
    }
    /**
     * Sum of dimensional weights for all packages.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight $totalDimWeight
     *
     * @return self
     */
    public function setTotalDimWeight(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight $totalDimWeight) : self
    {
        $this->initialized['totalDimWeight'] = true;
        $this->totalDimWeight = $totalDimWeight;
        return $this;
    }
    /**
     * Specifies the total rebate.<br>Example: 2.0
     *
     * @return float
     */
    public function getTotalRebates() : float
    {
        return $this->totalRebates;
    }
    /**
     * Specifies the total rebate.<br>Example: 2.0
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
     * Specifies a fuel surcharge percentage.<br>Example: 6.0
     *
     * @return float
     */
    public function getFuelSurchargePercent() : float
    {
        return $this->fuelSurchargePercent;
    }
    /**
     * Specifies a fuel surcharge percentage.<br>Example: 6.0
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
     * Specifies currency exchange rate.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate
    {
        return $this->currencyExchangeRate;
    }
    /**
     * Specifies currency exchange rate.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate $currencyExchangeRate) : self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6
     *
     * @return int
     */
    public function getDimDivisor() : int
    {
        return $this->dimDivisor;
    }
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6
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
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE
     *
     * @return string
     */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE
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
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA
     *
     * @return string
     */
    public function getLegDestinationLocationId() : string
    {
        return $this->legDestinationLocationId;
    }
    /**
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA
     *
     * @param string $legDestinationLocationId
     *
     * @return self
     */
    public function setLegDestinationLocationId(string $legDestinationLocationId) : self
    {
        $this->initialized['legDestinationLocationId'] = true;
        $this->legDestinationLocationId = $legDestinationLocationId;
        return $this;
    }
    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType
     *
     * @return string
     */
    public function getDimDivisorType() : string
    {
        return $this->dimDivisorType;
    }
    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType
     *
     * @param string $dimDivisorType
     *
     * @return self
     */
    public function setDimDivisorType(string $dimDivisorType) : self
    {
        $this->initialized['dimDivisorType'] = true;
        $this->dimDivisorType = $dimDivisorType;
        return $this;
    }
    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0
     *
     * @return float
     */
    public function getTotalBaseCharge() : float
    {
        return $this->totalBaseCharge;
    }
    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0
     *
     * @param float $totalBaseCharge
     *
     * @return self
     */
    public function setTotalBaseCharge(float $totalBaseCharge) : self
    {
        $this->initialized['totalBaseCharge'] = true;
        $this->totalBaseCharge = $totalBaseCharge;
        return $this;
    }
    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod
     *
     * @return string
     */
    public function getRatedWeightMethod() : string
    {
        return $this->ratedWeightMethod;
    }
    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod
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
     * The sum of all discounts.<br>Example: 9.0
     *
     * @return float
     */
    public function getTotalFreightDiscounts() : float
    {
        return $this->totalFreightDiscounts;
    }
    /**
     * The sum of all discounts.<br>Example: 9.0
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
     * Total of the transportation-based taxes.<br>Example: 12.6
     *
     * @return float
     */
    public function getTotalTaxes() : float
    {
        return $this->totalTaxes;
    }
    /**
     * Total of the transportation-based taxes.<br>Example: 12.6
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
     * Specifies minimum charge type.
     *
     * @return string
     */
    public function getMinimumChargeType() : string
    {
        return $this->minimumChargeType;
    }
    /**
     * Specifies minimum charge type.
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
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78
     *
     * @return float
     */
    public function getTotalDutiesAndTaxes() : float
    {
        return $this->totalDutiesAndTaxes;
    }
    /**
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78
     *
     * @param float $totalDutiesAndTaxes
     *
     * @return self
     */
    public function setTotalDutiesAndTaxes(float $totalDutiesAndTaxes) : self
    {
        $this->initialized['totalDutiesAndTaxes'] = true;
        $this->totalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    /**
     * The freight charge minus discounts.<br>Example: 6.0
     *
     * @return float
     */
    public function getTotalNetFreight() : float
    {
        return $this->totalNetFreight;
    }
    /**
     * The freight charge minus discounts.<br>Example: 6.0
     *
     * @param float $totalNetFreight
     *
     * @return self
     */
    public function setTotalNetFreight(float $totalNetFreight) : self
    {
        $this->initialized['totalNetFreight'] = true;
        $this->totalNetFreight = $totalNetFreight;
        return $this;
    }
    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2
     *
     * @return float
     */
    public function getTotalNetFedExCharge() : float
    {
        return $this->totalNetFedExCharge;
    }
    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2
     *
     * @param float $totalNetFedExCharge
     *
     * @return self
     */
    public function setTotalNetFedExCharge(float $totalNetFedExCharge) : self
    {
        $this->initialized['totalNetFedExCharge'] = true;
        $this->totalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem>
     */
    public function getSurcharges() : array
    {
        return $this->surcharges;
    }
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem> $surcharges
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
     * The total of all surcharges.<br>Example: 5.0
     *
     * @return float
     */
    public function getTotalSurcharges() : float
    {
        return $this->totalSurcharges;
    }
    /**
     * The total of all surcharges.<br>Example: 5.0
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
     * The weight used to calculate these rates.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight
     */
    public function getTotalBillingWeight() : ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight
    {
        return $this->totalBillingWeight;
    }
    /**
     * The weight used to calculate these rates.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight $totalBillingWeight
     *
     * @return self
     */
    public function setTotalBillingWeight(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight $totalBillingWeight) : self
    {
        $this->initialized['totalBillingWeight'] = true;
        $this->totalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem>
     */
    public function getFreightDiscounts() : array
    {
        return $this->freightDiscounts;
    }
    /**
     * 
     *
     * @param list<ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem> $freightDiscounts
     *
     * @return self
     */
    public function setFreightDiscounts(array $freightDiscounts) : self
    {
        $this->initialized['freightDiscounts'] = true;
        $this->freightDiscounts = $freightDiscounts;
        return $this;
    }
    /**
     * Indicates the rate scale used.<br>Example: 6702
     *
     * @return string
     */
    public function getRateScale() : string
    {
        return $this->rateScale;
    }
    /**
     * Indicates the rate scale used.<br>Example: 6702
     *
     * @param string $rateScale
     *
     * @return self
     */
    public function setRateScale(string $rateScale) : self
    {
        $this->initialized['rateScale'] = true;
        $this->rateScale = $rateScale;
        return $this;
    }
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253
     *
     * @return float
     */
    public function getTotalNetCharge() : float
    {
        return $this->totalNetCharge;
    }
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253
     *
     * @param float $totalNetCharge
     *
     * @return self
     */
    public function setTotalNetCharge(float $totalNetCharge) : self
    {
        $this->initialized['totalNetCharge'] = true;
        $this->totalNetCharge = $totalNetCharge;
        return $this;
    }
    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67
     *
     * @return float
     */
    public function getTotalNetChargeWithDutiesAndTaxes() : float
    {
        return $this->totalNetChargeWithDutiesAndTaxes;
    }
    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67
     *
     * @param float $totalNetChargeWithDutiesAndTaxes
     *
     * @return self
     */
    public function setTotalNetChargeWithDutiesAndTaxes(float $totalNetChargeWithDutiesAndTaxes) : self
    {
        $this->initialized['totalNetChargeWithDutiesAndTaxes'] = true;
        $this->totalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
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