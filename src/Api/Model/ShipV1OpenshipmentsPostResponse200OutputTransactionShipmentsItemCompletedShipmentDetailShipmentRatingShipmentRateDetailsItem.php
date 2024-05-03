<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem extends \ArrayObject
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
     * Indicates the rate zone used (based on origin and destination).<br>Example: US001O
     *
     * @var string
     */
    protected $rateZone;
    /**
     * Indicates which weight was used.<br>Example: ACTUAL
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * The total of the total duties & taxes and the total ancillary fees & taxes.<br>Example: 24.56
     *
     * @var float
     */
    protected $totalDutiesTaxesAndFees;
    /**
     * Specifies pricing Code.<br>Example: PACKAGE
     *
     * @var string
     */
    protected $pricingCode;
    /**
     * The total discounts used in the rate calculation.<br>Example: 1.56
     *
     * @var float
     */
    protected $totalFreightDiscounts;
    /**
     * Total of the transportation-based taxes.<br>Example: 3.45
     *
     * @var float
     */
    protected $totalTaxes;
    /**
     * Total of all values under this shipment's duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 6.78
     *
     * @var float
     */
    protected $totalDutiesAndTaxes;
    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.<br>Example: 5.67
     *
     * @var float
     */
    protected $totalAncillaryFeesAndTaxes;
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem>
     */
    protected $taxes;
    /**
     * The total sum of all rebates applied to this shipment.<br>Example: 1.98
     *
     * @var float
     */
    protected $totalRebates;
    /**
     * Specifies a fuel surcharge percentage.<br>Example: 4.56
     *
     * @var float
     */
    protected $fuelSurchargePercent;
    /**
     * Specifies the currency exchange performed on financial amounts on this rate.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate
     */
    protected $currencyExchangeRate;
    /**
     * The freight charge minus discounts.<br>Example: 9.56
     *
     * @var float
     */
    protected $totalNetFreight;
    /**
     * This is the sum of shipment's total net freight, total surchages (not including totalTaxes).<br>Example: 88.56
     *
     * @var float
     */
    protected $totalNetFedExCharge;
    /**
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem>
     */
    protected $shipmentLegRateDetails;
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 0
     *
     * @var int
     */
    protected $dimDivisor;
    /**
     * The Type used for this specific set of rate data.<br>Example: RATED_ACCOUNT_SHIPMENT
     *
     * @var string
     */
    protected $rateType;
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemSurchargesItem>
     */
    protected $surcharges;
    /**
     * The total amount of all surcharges applied to this shipment.<br>Example: 9.88
     *
     * @var float
     */
    protected $totalSurcharges;
    /**
     * The weight used to calculate these rates.
     *
     * @var ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight
     */
    protected $totalBillingWeight;
    /**
     * Indicates the freight discounts.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem>
     */
    protected $freightDiscounts;
    /**
     * Indicates the rate scale used.<br>Example: 00000
     *
     * @var string
     */
    protected $rateScale;
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 3.78
     *
     * @var float
     */
    protected $totalNetCharge;
    /**
     * The total Shipment charge that was calculated before surcharges, discounts and taxes.<br>Example: 234.56
     *
     * @var float
     */
    protected $totalBaseCharge;
    /**
     * This is the sum of shipment's total net charges and total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 222.56
     *
     * @var float
     */
    protected $totalNetChargeWithDutiesAndTaxes;
    /**
     * Indicates the currency code.<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: US001O
     *
     * @return string
     */
    public function getRateZone() : string
    {
        return $this->rateZone;
    }
    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: US001O
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
     * Indicates which weight was used.<br>Example: ACTUAL
     *
     * @return string
     */
    public function getRatedWeightMethod() : string
    {
        return $this->ratedWeightMethod;
    }
    /**
     * Indicates which weight was used.<br>Example: ACTUAL
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
     * The total of the total duties & taxes and the total ancillary fees & taxes.<br>Example: 24.56
     *
     * @return float
     */
    public function getTotalDutiesTaxesAndFees() : float
    {
        return $this->totalDutiesTaxesAndFees;
    }
    /**
     * The total of the total duties & taxes and the total ancillary fees & taxes.<br>Example: 24.56
     *
     * @param float $totalDutiesTaxesAndFees
     *
     * @return self
     */
    public function setTotalDutiesTaxesAndFees(float $totalDutiesTaxesAndFees) : self
    {
        $this->initialized['totalDutiesTaxesAndFees'] = true;
        $this->totalDutiesTaxesAndFees = $totalDutiesTaxesAndFees;
        return $this;
    }
    /**
     * Specifies pricing Code.<br>Example: PACKAGE
     *
     * @return string
     */
    public function getPricingCode() : string
    {
        return $this->pricingCode;
    }
    /**
     * Specifies pricing Code.<br>Example: PACKAGE
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
     * The total discounts used in the rate calculation.<br>Example: 1.56
     *
     * @return float
     */
    public function getTotalFreightDiscounts() : float
    {
        return $this->totalFreightDiscounts;
    }
    /**
     * The total discounts used in the rate calculation.<br>Example: 1.56
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
     * Total of the transportation-based taxes.<br>Example: 3.45
     *
     * @return float
     */
    public function getTotalTaxes() : float
    {
        return $this->totalTaxes;
    }
    /**
     * Total of the transportation-based taxes.<br>Example: 3.45
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
     * Total of all values under this shipment's duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 6.78
     *
     * @return float
     */
    public function getTotalDutiesAndTaxes() : float
    {
        return $this->totalDutiesAndTaxes;
    }
    /**
     * Total of all values under this shipment's duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 6.78
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
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.<br>Example: 5.67
     *
     * @return float
     */
    public function getTotalAncillaryFeesAndTaxes() : float
    {
        return $this->totalAncillaryFeesAndTaxes;
    }
    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.<br>Example: 5.67
     *
     * @param float $totalAncillaryFeesAndTaxes
     *
     * @return self
     */
    public function setTotalAncillaryFeesAndTaxes(float $totalAncillaryFeesAndTaxes) : self
    {
        $this->initialized['totalAncillaryFeesAndTaxes'] = true;
        $this->totalAncillaryFeesAndTaxes = $totalAncillaryFeesAndTaxes;
        return $this;
    }
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem>
     */
    public function getTaxes() : array
    {
        return $this->taxes;
    }
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem> $taxes
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
     * The total sum of all rebates applied to this shipment.<br>Example: 1.98
     *
     * @return float
     */
    public function getTotalRebates() : float
    {
        return $this->totalRebates;
    }
    /**
     * The total sum of all rebates applied to this shipment.<br>Example: 1.98
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
     * Specifies a fuel surcharge percentage.<br>Example: 4.56
     *
     * @return float
     */
    public function getFuelSurchargePercent() : float
    {
        return $this->fuelSurchargePercent;
    }
    /**
     * Specifies a fuel surcharge percentage.<br>Example: 4.56
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
     * Specifies the currency exchange performed on financial amounts on this rate.
     *
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate
    {
        return $this->currencyExchangeRate;
    }
    /**
     * Specifies the currency exchange performed on financial amounts on this rate.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate $currencyExchangeRate) : self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * The freight charge minus discounts.<br>Example: 9.56
     *
     * @return float
     */
    public function getTotalNetFreight() : float
    {
        return $this->totalNetFreight;
    }
    /**
     * The freight charge minus discounts.<br>Example: 9.56
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
     * This is the sum of shipment's total net freight, total surchages (not including totalTaxes).<br>Example: 88.56
     *
     * @return float
     */
    public function getTotalNetFedExCharge() : float
    {
        return $this->totalNetFedExCharge;
    }
    /**
     * This is the sum of shipment's total net freight, total surchages (not including totalTaxes).<br>Example: 88.56
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
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem>
     */
    public function getShipmentLegRateDetails() : array
    {
        return $this->shipmentLegRateDetails;
    }
    /**
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem> $shipmentLegRateDetails
     *
     * @return self
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails) : self
    {
        $this->initialized['shipmentLegRateDetails'] = true;
        $this->shipmentLegRateDetails = $shipmentLegRateDetails;
        return $this;
    }
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 0
     *
     * @return int
     */
    public function getDimDivisor() : int
    {
        return $this->dimDivisor;
    }
    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 0
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
     * The Type used for this specific set of rate data.<br>Example: RATED_ACCOUNT_SHIPMENT
     *
     * @return string
     */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
     * The Type used for this specific set of rate data.<br>Example: RATED_ACCOUNT_SHIPMENT
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
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemSurchargesItem>
     */
    public function getSurcharges() : array
    {
        return $this->surcharges;
    }
    /**
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemSurchargesItem> $surcharges
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
     * The total amount of all surcharges applied to this shipment.<br>Example: 9.88
     *
     * @return float
     */
    public function getTotalSurcharges() : float
    {
        return $this->totalSurcharges;
    }
    /**
     * The total amount of all surcharges applied to this shipment.<br>Example: 9.88
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
     * @return ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight
     */
    public function getTotalBillingWeight() : ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight
    {
        return $this->totalBillingWeight;
    }
    /**
     * The weight used to calculate these rates.
     *
     * @param ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight $totalBillingWeight
     *
     * @return self
     */
    public function setTotalBillingWeight(ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight $totalBillingWeight) : self
    {
        $this->initialized['totalBillingWeight'] = true;
        $this->totalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * Indicates the freight discounts.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem>
     */
    public function getFreightDiscounts() : array
    {
        return $this->freightDiscounts;
    }
    /**
     * Indicates the freight discounts.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem> $freightDiscounts
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
     * Indicates the rate scale used.<br>Example: 00000
     *
     * @return string
     */
    public function getRateScale() : string
    {
        return $this->rateScale;
    }
    /**
     * Indicates the rate scale used.<br>Example: 00000
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
     * The net charge after applying all discounts and surcharges.<br>Example: 3.78
     *
     * @return float
     */
    public function getTotalNetCharge() : float
    {
        return $this->totalNetCharge;
    }
    /**
     * The net charge after applying all discounts and surcharges.<br>Example: 3.78
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
     * The total Shipment charge that was calculated before surcharges, discounts and taxes.<br>Example: 234.56
     *
     * @return float
     */
    public function getTotalBaseCharge() : float
    {
        return $this->totalBaseCharge;
    }
    /**
     * The total Shipment charge that was calculated before surcharges, discounts and taxes.<br>Example: 234.56
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
     * This is the sum of shipment's total net charges and total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 222.56
     *
     * @return float
     */
    public function getTotalNetChargeWithDutiesAndTaxes() : float
    {
        return $this->totalNetChargeWithDutiesAndTaxes;
    }
    /**
     * This is the sum of shipment's total net charges and total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 222.56
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
     * Indicates the currency code.<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Indicates the currency code.<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency Codes</a>
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