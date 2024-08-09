<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentShipmentSpecialServicesShipmentCODDetailAddTransportationChargesDetail extends \ArrayObject
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
     * Specify the Rate Type used.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Specify which level the rate to be applied.
     *
     * @var string
     */
    protected $rateLevelType;
    /**
     * Specify which level the charges to be applied.
     *
     * @var string
     */
    protected $chargeLevelType;
    /**
     * Specify Charge type.
     *
     * @var string
     */
    protected $chargeType;
    /**
     * Specify the Rate Type used.
     *
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }
    /**
     * Specify the Rate Type used.
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
     * Specify which level the rate to be applied.
     *
     * @return string
     */
    public function getRateLevelType(): string
    {
        return $this->rateLevelType;
    }
    /**
     * Specify which level the rate to be applied.
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
     * Specify which level the charges to be applied.
     *
     * @return string
     */
    public function getChargeLevelType(): string
    {
        return $this->chargeLevelType;
    }
    /**
     * Specify which level the charges to be applied.
     *
     * @param string $chargeLevelType
     *
     * @return self
     */
    public function setChargeLevelType(string $chargeLevelType): self
    {
        $this->initialized['chargeLevelType'] = true;
        $this->chargeLevelType = $chargeLevelType;
        return $this;
    }
    /**
     * Specify Charge type.
     *
     * @return string
     */
    public function getChargeType(): string
    {
        return $this->chargeType;
    }
    /**
     * Specify Charge type.
     *
     * @param string $chargeType
     *
     * @return self
     */
    public function setChargeType(string $chargeType): self
    {
        $this->initialized['chargeType'] = true;
        $this->chargeType = $chargeType;
        return $this;
    }
}