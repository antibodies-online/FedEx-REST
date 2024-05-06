<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetail extends \ArrayObject
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
     * variable handling percentage <br> Example: 25.67
     *
     * @var float
     */
    protected $percentValue;
    /**
     * Rate charge fixed value
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetailfixedValue
     */
    protected $fixedValue;
    /**
     * Description of the percentage <br> Example: NET_CHARGE
     *
     * @var string
     */
    protected $rateElementBasis;
    /**
     * Optional <br> RateType Basis <br> Example: ACCOUNT
     *
     * @var string
     */
    protected $rateTypeBasis;
    /**
     * variable handling percentage <br> Example: 25.67
     *
     * @return float
     */
    public function getPercentValue() : float
    {
        return $this->percentValue;
    }
    /**
     * variable handling percentage <br> Example: 25.67
     *
     * @param float $percentValue
     *
     * @return self
     */
    public function setPercentValue(float $percentValue) : self
    {
        $this->initialized['percentValue'] = true;
        $this->percentValue = $percentValue;
        return $this;
    }
    /**
     * Rate charge fixed value
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetailfixedValue
     */
    public function getFixedValue() : AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetailfixedValue
    {
        return $this->fixedValue;
    }
    /**
     * Rate charge fixed value
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetailfixedValue $fixedValue
     *
     * @return self
     */
    public function setFixedValue(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentvariableHandlingChargeDetailfixedValue $fixedValue) : self
    {
        $this->initialized['fixedValue'] = true;
        $this->fixedValue = $fixedValue;
        return $this;
    }
    /**
     * Description of the percentage <br> Example: NET_CHARGE
     *
     * @return string
     */
    public function getRateElementBasis() : string
    {
        return $this->rateElementBasis;
    }
    /**
     * Description of the percentage <br> Example: NET_CHARGE
     *
     * @param string $rateElementBasis
     *
     * @return self
     */
    public function setRateElementBasis(string $rateElementBasis) : self
    {
        $this->initialized['rateElementBasis'] = true;
        $this->rateElementBasis = $rateElementBasis;
        return $this;
    }
    /**
     * Optional <br> RateType Basis <br> Example: ACCOUNT
     *
     * @return string
     */
    public function getRateTypeBasis() : string
    {
        return $this->rateTypeBasis;
    }
    /**
     * Optional <br> RateType Basis <br> Example: ACCOUNT
     *
     * @param string $rateTypeBasis
     *
     * @return self
     */
    public function setRateTypeBasis(string $rateTypeBasis) : self
    {
        $this->initialized['rateTypeBasis'] = true;
        $this->rateTypeBasis = $rateTypeBasis;
        return $this;
    }
}