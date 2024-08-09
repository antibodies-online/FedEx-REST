<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentVariableHandlingChargeDetail extends \ArrayObject
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
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Indicate the variable handling percentage. Actual percentage (10 means 10%, which is a mutiplier of 0.1).
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
     * Indicate the Fixed value. <br>If you choose FIXED_AMOUNT as the ChargeType, this element allows you to enter the fixed value of the handling charge. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example - 5.00.
     *
     * @var mixed
     */
    protected $fixedValue;
    /**
     * Indicate the rate charge on which, the variable handling amount is calculated.
     *
     * @var string
     */
    protected $rateElementBasis;
    /**
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc.
     *
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }
    /**
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc.
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
     * Indicate the variable handling percentage. Actual percentage (10 means 10%, which is a mutiplier of 0.1).
     *
     * @return float
     */
    public function getPercentValue(): float
    {
        return $this->percentValue;
    }
    /**
     * Indicate the variable handling percentage. Actual percentage (10 means 10%, which is a mutiplier of 0.1).
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
     * Indicate the Fixed value. <br>If you choose FIXED_AMOUNT as the ChargeType, this element allows you to enter the fixed value of the handling charge. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example - 5.00.
     *
     * @return mixed
     */
    public function getFixedValue()
    {
        return $this->fixedValue;
    }
    /**
     * Indicate the Fixed value. <br>If you choose FIXED_AMOUNT as the ChargeType, this element allows you to enter the fixed value of the handling charge. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example - 5.00.
     *
     * @param mixed $fixedValue
     *
     * @return self
     */
    public function setFixedValue($fixedValue): self
    {
        $this->initialized['fixedValue'] = true;
        $this->fixedValue = $fixedValue;
        return $this;
    }
    /**
     * Indicate the rate charge on which, the variable handling amount is calculated.
     *
     * @return string
     */
    public function getRateElementBasis(): string
    {
        return $this->rateElementBasis;
    }
    /**
     * Indicate the rate charge on which, the variable handling amount is calculated.
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