<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetail extends \ArrayObject
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
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc
     *
     * @var string
     */
    protected $rateType;
    /**
     * This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     *
     * @var float
     */
    protected $percentValue;
    /**
     * indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     *
     * @var string
     */
    protected $rateLevelType;
    /**
     * This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     *
     * @var ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetailFixedValue
     */
    protected $fixedValue;
    /**
     * Specify the charge type upon which the variable handling percentage amount is calculated.
     *
     * @var string
     */
    protected $rateElementBasis;
    /**
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc
     *
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }
    /**
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc
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
     * This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     *
     * @return float
     */
    public function getPercentValue(): float
    {
        return $this->percentValue;
    }
    /**
     * This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     *
     * @param float $percentValue
     *
     * @return self
     */
    public function setPercentValue(float $percentValue): self
    {
        $this->initialized['percentValue'] = true;
        $this->percentValue = $percentValue;
        return $this;
    }
    /**
     * indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     *
     * @return string
     */
    public function getRateLevelType(): string
    {
        return $this->rateLevelType;
    }
    /**
     * indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     *
     * @param string $rateLevelType
     *
     * @return self
     */
    public function setRateLevelType(string $rateLevelType): self
    {
        $this->initialized['rateLevelType'] = true;
        $this->rateLevelType = $rateLevelType;
        return $this;
    }
    /**
     * This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     *
     * @return ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetailFixedValue
     */
    public function getFixedValue(): ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetailFixedValue
    {
        return $this->fixedValue;
    }
    /**
     * This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     *
     * @param ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetailFixedValue $fixedValue
     *
     * @return self
     */
    public function setFixedValue(ShipV1OpenshipmentsPackagesRetrievePostResponse200OutputRequestedpackageLineItemVariableHandlingChargeDetailFixedValue $fixedValue): self
    {
        $this->initialized['fixedValue'] = true;
        $this->fixedValue = $fixedValue;
        return $this;
    }
    /**
     * Specify the charge type upon which the variable handling percentage amount is calculated.
     *
     * @return string
     */
    public function getRateElementBasis(): string
    {
        return $this->rateElementBasis;
    }
    /**
     * Specify the charge type upon which the variable handling percentage amount is calculated.
     *
     * @param string $rateElementBasis
     *
     * @return self
     */
    public function setRateElementBasis(string $rateElementBasis): self
    {
        $this->initialized['rateElementBasis'] = true;
        $this->rateElementBasis = $rateElementBasis;
        return $this;
    }
}