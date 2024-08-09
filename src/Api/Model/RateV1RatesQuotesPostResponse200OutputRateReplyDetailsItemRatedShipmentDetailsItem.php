<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem extends \ArrayObject
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
     * Indicates the rate type used for this rate data.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Indicates the weight type used for the rate.'
     *
     * @var string
     */
    protected $ratedWeightMethod;
    /**
     * This is the total amount of the duties and taxes plus the total ancillary fees and taxes.
     *
     * @var float
     */
    protected $totalDutiesTaxesAndFees;
    /**
     * This is the total discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @var float
     */
    protected $totalDiscounts;
    /**
     * The total of shipment/package Duties and taxes.
     *
     * @var float
     */
    protected $totalDutiesAndTaxes;
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges
     */
    protected $variableHandlingCharges;
    /**
     * These are the estimation and duty  charges.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemEdtChargesItem>
     */
    protected $edtCharges;
    /**
     * Indicates the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @var float
     */
    protected $totalAncillaryFeesAndTaxes;
    /**
     * These are the package-level data for this rate type.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItem>
     */
    protected $ratedPackages;
    /**
     * This shipment's totalNetFedExChargeList, which is totalNetFreight plus totalSurcharges (not including totalTaxes).
     *
     * @var float
     */
    protected $totalNetFedExCharge;
    /**
     * Indicates the unique identifier for a specific rate quotation.<br> Example: XX1123XX
     *
     * @var string
     */
    protected $quoteNumber;
    /**
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem>
     */
    protected $shipmentLegRateDetails;
    /**
     * This identifies the manner in which the chargeRate was applied, for Freight.<br> Valid values are: <ul><li>CWT - Charge rate applies per weight.</li><li>FLAT - Charge rate is a flat-rate amount.</li><li>MINIMUM</li></ul>
     *
     * @var string
     */
    protected $freightChargeBasis;
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges
     */
    protected $totalVariableHandlingCharges;
    /**
     * This is total value added tax charges (VAT).
     *
     * @var float
     */
    protected $totalVatCharge;
    /**
     * This is the total amount of the shipment-level fees and taxes that are not based on transportation charges of commodity-level estimated duties and taxes.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem>
     */
    protected $ancillaryFeesAndTaxes;
    /**
     * Specifies the Edt charges.
     *
     * @var list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem>
     */
    protected $preferredEdtCharges;
    /**
     * This is net charges for the shipment.
     *
     * @var float
     */
    protected $totalNetCharge;
    /**
     * This is total base charges for the shipment.
     *
     * @var float
     */
    protected $totalBaseCharge;
    /**
     * This is total net Charges with Duties And Taxes for the shipment.
     *
     * @var float
     */
    protected $totalNetChargeWithDutiesAndTaxes;
    /**
     * This is shipment level rate data.
     *
     * @var RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail
     */
    protected $shipmentRateDetail;
    /**
     * Indicates the rate type used for this rate data.
     *
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }
    /**
     * Indicates the rate type used for this rate data.
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
     * Indicates the weight type used for the rate.'
     *
     * @return string
     */
    public function getRatedWeightMethod(): string
    {
        return $this->ratedWeightMethod;
    }
    /**
     * Indicates the weight type used for the rate.'
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
     * This is the total amount of the duties and taxes plus the total ancillary fees and taxes.
     *
     * @return float
     */
    public function getTotalDutiesTaxesAndFees(): float
    {
        return $this->totalDutiesTaxesAndFees;
    }
    /**
     * This is the total amount of the duties and taxes plus the total ancillary fees and taxes.
     *
     * @param float $totalDutiesTaxesAndFees
     *
     * @return self
     */
    public function setTotalDutiesTaxesAndFees(float $totalDutiesTaxesAndFees): self
    {
        $this->initialized['totalDutiesTaxesAndFees'] = true;
        $this->totalDutiesTaxesAndFees = $totalDutiesTaxesAndFees;
        return $this;
    }
    /**
     * This is the total discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @return float
     */
    public function getTotalDiscounts(): float
    {
        return $this->totalDiscounts;
    }
    /**
     * This is the total discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     *
     * @param float $totalDiscounts
     *
     * @return self
     */
    public function setTotalDiscounts(float $totalDiscounts): self
    {
        $this->initialized['totalDiscounts'] = true;
        $this->totalDiscounts = $totalDiscounts;
        return $this;
    }
    /**
     * The total of shipment/package Duties and taxes.
     *
     * @return float
     */
    public function getTotalDutiesAndTaxes(): float
    {
        return $this->totalDutiesAndTaxes;
    }
    /**
     * The total of shipment/package Duties and taxes.
     *
     * @param float $totalDutiesAndTaxes
     *
     * @return self
     */
    public function setTotalDutiesAndTaxes(float $totalDutiesAndTaxes): self
    {
        $this->initialized['totalDutiesAndTaxes'] = true;
        $this->totalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges
     */
    public function getVariableHandlingCharges(): RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges
    {
        return $this->variableHandlingCharges;
    }
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges $variableHandlingCharges
     *
     * @return self
     */
    public function setVariableHandlingCharges(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges $variableHandlingCharges): self
    {
        $this->initialized['variableHandlingCharges'] = true;
        $this->variableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * These are the estimation and duty  charges.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemEdtChargesItem>
     */
    public function getEdtCharges(): array
    {
        return $this->edtCharges;
    }
    /**
     * These are the estimation and duty  charges.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemEdtChargesItem> $edtCharges
     *
     * @return self
     */
    public function setEdtCharges(array $edtCharges): self
    {
        $this->initialized['edtCharges'] = true;
        $this->edtCharges = $edtCharges;
        return $this;
    }
    /**
     * Indicates the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @return float
     */
    public function getTotalAncillaryFeesAndTaxes(): float
    {
        return $this->totalAncillaryFeesAndTaxes;
    }
    /**
     * Indicates the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @param float $totalAncillaryFeesAndTaxes
     *
     * @return self
     */
    public function setTotalAncillaryFeesAndTaxes(float $totalAncillaryFeesAndTaxes): self
    {
        $this->initialized['totalAncillaryFeesAndTaxes'] = true;
        $this->totalAncillaryFeesAndTaxes = $totalAncillaryFeesAndTaxes;
        return $this;
    }
    /**
     * These are the package-level data for this rate type.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItem>
     */
    public function getRatedPackages(): array
    {
        return $this->ratedPackages;
    }
    /**
     * These are the package-level data for this rate type.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItem> $ratedPackages
     *
     * @return self
     */
    public function setRatedPackages(array $ratedPackages): self
    {
        $this->initialized['ratedPackages'] = true;
        $this->ratedPackages = $ratedPackages;
        return $this;
    }
    /**
     * This shipment's totalNetFedExChargeList, which is totalNetFreight plus totalSurcharges (not including totalTaxes).
     *
     * @return float
     */
    public function getTotalNetFedExCharge(): float
    {
        return $this->totalNetFedExCharge;
    }
    /**
     * This shipment's totalNetFedExChargeList, which is totalNetFreight plus totalSurcharges (not including totalTaxes).
     *
     * @param float $totalNetFedExCharge
     *
     * @return self
     */
    public function setTotalNetFedExCharge(float $totalNetFedExCharge): self
    {
        $this->initialized['totalNetFedExCharge'] = true;
        $this->totalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    /**
     * Indicates the unique identifier for a specific rate quotation.<br> Example: XX1123XX
     *
     * @return string
     */
    public function getQuoteNumber(): string
    {
        return $this->quoteNumber;
    }
    /**
     * Indicates the unique identifier for a specific rate quotation.<br> Example: XX1123XX
     *
     * @param string $quoteNumber
     *
     * @return self
     */
    public function setQuoteNumber(string $quoteNumber): self
    {
        $this->initialized['quoteNumber'] = true;
        $this->quoteNumber = $quoteNumber;
        return $this;
    }
    /**
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem>
     */
    public function getShipmentLegRateDetails(): array
    {
        return $this->shipmentLegRateDetails;
    }
    /**
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem> $shipmentLegRateDetails
     *
     * @return self
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails): self
    {
        $this->initialized['shipmentLegRateDetails'] = true;
        $this->shipmentLegRateDetails = $shipmentLegRateDetails;
        return $this;
    }
    /**
     * This identifies the manner in which the chargeRate was applied, for Freight.<br> Valid values are: <ul><li>CWT - Charge rate applies per weight.</li><li>FLAT - Charge rate is a flat-rate amount.</li><li>MINIMUM</li></ul>
     *
     * @return string
     */
    public function getFreightChargeBasis(): string
    {
        return $this->freightChargeBasis;
    }
    /**
     * This identifies the manner in which the chargeRate was applied, for Freight.<br> Valid values are: <ul><li>CWT - Charge rate applies per weight.</li><li>FLAT - Charge rate is a flat-rate amount.</li><li>MINIMUM</li></ul>
     *
     * @param string $freightChargeBasis
     *
     * @return self
     */
    public function setFreightChargeBasis(string $freightChargeBasis): self
    {
        $this->initialized['freightChargeBasis'] = true;
        $this->freightChargeBasis = $freightChargeBasis;
        return $this;
    }
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges
     */
    public function getTotalVariableHandlingCharges(): RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges
    {
        return $this->totalVariableHandlingCharges;
    }
    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges $totalVariableHandlingCharges
     *
     * @return self
     */
    public function setTotalVariableHandlingCharges(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges $totalVariableHandlingCharges): self
    {
        $this->initialized['totalVariableHandlingCharges'] = true;
        $this->totalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    /**
     * This is total value added tax charges (VAT).
     *
     * @return float
     */
    public function getTotalVatCharge(): float
    {
        return $this->totalVatCharge;
    }
    /**
     * This is total value added tax charges (VAT).
     *
     * @param float $totalVatCharge
     *
     * @return self
     */
    public function setTotalVatCharge(float $totalVatCharge): self
    {
        $this->initialized['totalVatCharge'] = true;
        $this->totalVatCharge = $totalVatCharge;
        return $this;
    }
    /**
     * This is the total amount of the shipment-level fees and taxes that are not based on transportation charges of commodity-level estimated duties and taxes.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem>
     */
    public function getAncillaryFeesAndTaxes(): array
    {
        return $this->ancillaryFeesAndTaxes;
    }
    /**
     * This is the total amount of the shipment-level fees and taxes that are not based on transportation charges of commodity-level estimated duties and taxes.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem> $ancillaryFeesAndTaxes
     *
     * @return self
     */
    public function setAncillaryFeesAndTaxes(array $ancillaryFeesAndTaxes): self
    {
        $this->initialized['ancillaryFeesAndTaxes'] = true;
        $this->ancillaryFeesAndTaxes = $ancillaryFeesAndTaxes;
        return $this;
    }
    /**
     * Specifies the Edt charges.
     *
     * @return list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem>
     */
    public function getPreferredEdtCharges(): array
    {
        return $this->preferredEdtCharges;
    }
    /**
     * Specifies the Edt charges.
     *
     * @param list<RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem> $preferredEdtCharges
     *
     * @return self
     */
    public function setPreferredEdtCharges(array $preferredEdtCharges): self
    {
        $this->initialized['preferredEdtCharges'] = true;
        $this->preferredEdtCharges = $preferredEdtCharges;
        return $this;
    }
    /**
     * This is net charges for the shipment.
     *
     * @return float
     */
    public function getTotalNetCharge(): float
    {
        return $this->totalNetCharge;
    }
    /**
     * This is net charges for the shipment.
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
     * This is total base charges for the shipment.
     *
     * @return float
     */
    public function getTotalBaseCharge(): float
    {
        return $this->totalBaseCharge;
    }
    /**
     * This is total base charges for the shipment.
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
     * This is total net Charges with Duties And Taxes for the shipment.
     *
     * @return float
     */
    public function getTotalNetChargeWithDutiesAndTaxes(): float
    {
        return $this->totalNetChargeWithDutiesAndTaxes;
    }
    /**
     * This is total net Charges with Duties And Taxes for the shipment.
     *
     * @param float $totalNetChargeWithDutiesAndTaxes
     *
     * @return self
     */
    public function setTotalNetChargeWithDutiesAndTaxes(float $totalNetChargeWithDutiesAndTaxes): self
    {
        $this->initialized['totalNetChargeWithDutiesAndTaxes'] = true;
        $this->totalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    /**
     * This is shipment level rate data.
     *
     * @return RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail
     */
    public function getShipmentRateDetail(): RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail
    {
        return $this->shipmentRateDetail;
    }
    /**
     * This is shipment level rate data.
     *
     * @param RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail $shipmentRateDetail
     *
     * @return self
     */
    public function setShipmentRateDetail(RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail $shipmentRateDetail): self
    {
        $this->initialized['shipmentRateDetail'] = true;
        $this->shipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
}