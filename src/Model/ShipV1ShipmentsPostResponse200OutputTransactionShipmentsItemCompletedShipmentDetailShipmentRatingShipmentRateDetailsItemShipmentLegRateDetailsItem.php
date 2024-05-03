<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem extends \ArrayObject
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
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone.
     *
     * @var string
     */
    protected $rateZone;
    /**
     * Specifies the Pricing Code.<br>Example: pricingCode.
     *
     * @var string
     */
    protected $pricingCode;
    /**
     * Specifies the taxes.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem>
     */
    protected $taxes;
    /**
     * Sum of dimensional weights for all packages.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight
     */
    protected $totalDimWeight;
    /**
     * Specifies the total rebate.<br>Example: 2.0.
     *
     * @var float
     */
    protected $totalRebates;
    /**
     * Specifies a fuel surcharge percentage.<br>Example: 6.0.
     *
     * @var float
     */
    protected $fuelSurchargePercent;
    /**
     * Specifies currency exchange rate.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate
     */
    protected $currencyExchangeRate;
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6.
     *
     * @var int
     */
    protected $dimDivisor;
    /**
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA.
     *
     * @var string
     */
    protected $legDestinationLocationId;
    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType.
     *
     * @var string
     */
    protected $dimDivisorType;
    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0.
     *
     * @var float
     */
    protected $totalBaseCharge;
    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod.
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * The sum of all discounts.<br>Example: 9.0.
     *
     * @var float
     */
    protected $totalFreightDiscounts;
    /**
     * Total of the transportation-based taxes.<br>Example: 12.6.
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
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78.
     *
     * @var float
     */
    protected $totalDutiesAndTaxes;
    /**
     * The freight charge minus discounts.<br>Example: 6.0.
     *
     * @var float
     */
    protected $totalNetFreight;
    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2.
     *
     * @var float
     */
    protected $totalNetFedExCharge;
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem>
     */
    protected $surcharges;
    /**
     * The total of all surcharges.<br>Example: 5.0.
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * The weight used to calculate these rates.
     *
     * @var ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight
     */
    protected $totalBillingWeight;
    /**
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem>
     */
    protected $freightDiscounts;
    /**
     * Indicates the rate scale used.<br>Example: 6702.
     *
     * @var string
     */
    protected $rateScale;
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253.
     *
     * @var float
     */
    protected $totalNetCharge;
    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67.
     *
     * @var float
     */
    protected $totalNetChargeWithDutiesAndTaxes;
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     *
     * @var string
     */
    protected $currency;

    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone.
     */
    public function getRateZone(): string
    {
        return $this->rateZone;
    }

    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone.
     */
    public function setRateZone(string $rateZone): self
    {
        $this->initialized['rateZone'] = true;
        $this->rateZone = $rateZone;

        return $this;
    }

    /**
     * Specifies the Pricing Code.<br>Example: pricingCode.
     */
    public function getPricingCode(): string
    {
        return $this->pricingCode;
    }

    /**
     * Specifies the Pricing Code.<br>Example: pricingCode.
     */
    public function setPricingCode(string $pricingCode): self
    {
        $this->initialized['pricingCode'] = true;
        $this->pricingCode = $pricingCode;

        return $this;
    }

    /**
     * Specifies the taxes.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem>
     */
    public function getTaxes(): array
    {
        return $this->taxes;
    }

    /**
     * Specifies the taxes.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem> $taxes
     */
    public function setTaxes(array $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Sum of dimensional weights for all packages.
     */
    public function getTotalDimWeight(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight
    {
        return $this->totalDimWeight;
    }

    /**
     * Sum of dimensional weights for all packages.
     */
    public function setTotalDimWeight(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalDimWeight $totalDimWeight): self
    {
        $this->initialized['totalDimWeight'] = true;
        $this->totalDimWeight = $totalDimWeight;

        return $this;
    }

    /**
     * Specifies the total rebate.<br>Example: 2.0.
     */
    public function getTotalRebates(): float
    {
        return $this->totalRebates;
    }

    /**
     * Specifies the total rebate.<br>Example: 2.0.
     */
    public function setTotalRebates(float $totalRebates): self
    {
        $this->initialized['totalRebates'] = true;
        $this->totalRebates = $totalRebates;

        return $this;
    }

    /**
     * Specifies a fuel surcharge percentage.<br>Example: 6.0.
     */
    public function getFuelSurchargePercent(): float
    {
        return $this->fuelSurchargePercent;
    }

    /**
     * Specifies a fuel surcharge percentage.<br>Example: 6.0.
     */
    public function setFuelSurchargePercent(float $fuelSurchargePercent): self
    {
        $this->initialized['fuelSurchargePercent'] = true;
        $this->fuelSurchargePercent = $fuelSurchargePercent;

        return $this;
    }

    /**
     * Specifies currency exchange rate.
     */
    public function getCurrencyExchangeRate(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate
    {
        return $this->currencyExchangeRate;
    }

    /**
     * Specifies currency exchange rate.
     */
    public function setCurrencyExchangeRate(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemCurrencyExchangeRate $currencyExchangeRate): self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;

        return $this;
    }

    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6.
     */
    public function getDimDivisor(): int
    {
        return $this->dimDivisor;
    }

    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6.
     */
    public function setDimDivisor(int $dimDivisor): self
    {
        $this->initialized['dimDivisor'] = true;
        $this->dimDivisor = $dimDivisor;

        return $this;
    }

    /**
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE.
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }

    /**
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE.
     */
    public function setRateType(string $rateType): self
    {
        $this->initialized['rateType'] = true;
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA.
     */
    public function getLegDestinationLocationId(): string
    {
        return $this->legDestinationLocationId;
    }

    /**
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA.
     */
    public function setLegDestinationLocationId(string $legDestinationLocationId): self
    {
        $this->initialized['legDestinationLocationId'] = true;
        $this->legDestinationLocationId = $legDestinationLocationId;

        return $this;
    }

    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType.
     */
    public function getDimDivisorType(): string
    {
        return $this->dimDivisorType;
    }

    /**
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType.
     */
    public function setDimDivisorType(string $dimDivisorType): self
    {
        $this->initialized['dimDivisorType'] = true;
        $this->dimDivisorType = $dimDivisorType;

        return $this;
    }

    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0.
     */
    public function getTotalBaseCharge(): float
    {
        return $this->totalBaseCharge;
    }

    /**
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0.
     */
    public function setTotalBaseCharge(float $totalBaseCharge): self
    {
        $this->initialized['totalBaseCharge'] = true;
        $this->totalBaseCharge = $totalBaseCharge;

        return $this;
    }

    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod.
     */
    public function getRatedWeightMethod(): string
    {
        return $this->ratedWeightMethod;
    }

    /**
     * Indicates which weight was used.<br>Example: ratedWeightMethod.
     */
    public function setRatedWeightMethod(string $ratedWeightMethod): self
    {
        $this->initialized['ratedWeightMethod'] = true;
        $this->ratedWeightMethod = $ratedWeightMethod;

        return $this;
    }

    /**
     * The sum of all discounts.<br>Example: 9.0.
     */
    public function getTotalFreightDiscounts(): float
    {
        return $this->totalFreightDiscounts;
    }

    /**
     * The sum of all discounts.<br>Example: 9.0.
     */
    public function setTotalFreightDiscounts(float $totalFreightDiscounts): self
    {
        $this->initialized['totalFreightDiscounts'] = true;
        $this->totalFreightDiscounts = $totalFreightDiscounts;

        return $this;
    }

    /**
     * Total of the transportation-based taxes.<br>Example: 12.6.
     */
    public function getTotalTaxes(): float
    {
        return $this->totalTaxes;
    }

    /**
     * Total of the transportation-based taxes.<br>Example: 12.6.
     */
    public function setTotalTaxes(float $totalTaxes): self
    {
        $this->initialized['totalTaxes'] = true;
        $this->totalTaxes = $totalTaxes;

        return $this;
    }

    /**
     * Specifies minimum charge type.
     */
    public function getMinimumChargeType(): string
    {
        return $this->minimumChargeType;
    }

    /**
     * Specifies minimum charge type.
     */
    public function setMinimumChargeType(string $minimumChargeType): self
    {
        $this->initialized['minimumChargeType'] = true;
        $this->minimumChargeType = $minimumChargeType;

        return $this;
    }

    /**
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78.
     */
    public function getTotalDutiesAndTaxes(): float
    {
        return $this->totalDutiesAndTaxes;
    }

    /**
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78.
     */
    public function setTotalDutiesAndTaxes(float $totalDutiesAndTaxes): self
    {
        $this->initialized['totalDutiesAndTaxes'] = true;
        $this->totalDutiesAndTaxes = $totalDutiesAndTaxes;

        return $this;
    }

    /**
     * The freight charge minus discounts.<br>Example: 6.0.
     */
    public function getTotalNetFreight(): float
    {
        return $this->totalNetFreight;
    }

    /**
     * The freight charge minus discounts.<br>Example: 6.0.
     */
    public function setTotalNetFreight(float $totalNetFreight): self
    {
        $this->initialized['totalNetFreight'] = true;
        $this->totalNetFreight = $totalNetFreight;

        return $this;
    }

    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2.
     */
    public function getTotalNetFedExCharge(): float
    {
        return $this->totalNetFedExCharge;
    }

    /**
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2.
     */
    public function setTotalNetFedExCharge(float $totalNetFedExCharge): self
    {
        $this->initialized['totalNetFedExCharge'] = true;
        $this->totalNetFedExCharge = $totalNetFedExCharge;

        return $this;
    }

    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem>
     */
    public function getSurcharges(): array
    {
        return $this->surcharges;
    }

    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemSurchargesItem> $surcharges
     */
    public function setSurcharges(array $surcharges): self
    {
        $this->initialized['surcharges'] = true;
        $this->surcharges = $surcharges;

        return $this;
    }

    /**
     * The total of all surcharges.<br>Example: 5.0.
     */
    public function getTotalSurcharges(): float
    {
        return $this->totalSurcharges;
    }

    /**
     * The total of all surcharges.<br>Example: 5.0.
     */
    public function setTotalSurcharges(float $totalSurcharges): self
    {
        $this->initialized['totalSurcharges'] = true;
        $this->totalSurcharges = $totalSurcharges;

        return $this;
    }

    /**
     * The weight used to calculate these rates.
     */
    public function getTotalBillingWeight(): ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight
    {
        return $this->totalBillingWeight;
    }

    /**
     * The weight used to calculate these rates.
     */
    public function setTotalBillingWeight(ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTotalBillingWeight $totalBillingWeight): self
    {
        $this->initialized['totalBillingWeight'] = true;
        $this->totalBillingWeight = $totalBillingWeight;

        return $this;
    }

    /**
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem>
     */
    public function getFreightDiscounts(): array
    {
        return $this->freightDiscounts;
    }

    /**
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemFreightDiscountsItem> $freightDiscounts
     */
    public function setFreightDiscounts(array $freightDiscounts): self
    {
        $this->initialized['freightDiscounts'] = true;
        $this->freightDiscounts = $freightDiscounts;

        return $this;
    }

    /**
     * Indicates the rate scale used.<br>Example: 6702.
     */
    public function getRateScale(): string
    {
        return $this->rateScale;
    }

    /**
     * Indicates the rate scale used.<br>Example: 6702.
     */
    public function setRateScale(string $rateScale): self
    {
        $this->initialized['rateScale'] = true;
        $this->rateScale = $rateScale;

        return $this;
    }

    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253.
     */
    public function getTotalNetCharge(): float
    {
        return $this->totalNetCharge;
    }

    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 253.
     */
    public function setTotalNetCharge(float $totalNetCharge): self
    {
        $this->initialized['totalNetCharge'] = true;
        $this->totalNetCharge = $totalNetCharge;

        return $this;
    }

    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67.
     */
    public function getTotalNetChargeWithDutiesAndTaxes(): float
    {
        return $this->totalNetChargeWithDutiesAndTaxes;
    }

    /**
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67.
     */
    public function setTotalNetChargeWithDutiesAndTaxes(float $totalNetChargeWithDutiesAndTaxes): self
    {
        $this->initialized['totalNetChargeWithDutiesAndTaxes'] = true;
        $this->totalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;

        return $this;
    }

    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}