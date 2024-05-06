<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesshipmentCODDetailaddTransportationChargesDetail extends \ArrayObject
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
     * Specify COD Rate Type.
     *
     * @var string
     */
    protected $rateType;
    /**
     * Specify whether the rate applied on bundle or indiividual package.
     *
     * @var string
     */
    protected $rateLevelType;
    /**
     * Specify whether the charges applied on current or all packages.
     *
     * @var string
     */
    protected $chargeLevelType;
    /**
     * Specify the Charges Type.
     *
     * @var string
     */
    protected $chargeType;
    /**
     * Specify COD Rate Type.
     *
     * @return string
     */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
     * Specify COD Rate Type.
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
     * Specify whether the rate applied on bundle or indiividual package.
     *
     * @return string
     */
    public function getRateLevelType() : string
    {
        return $this->rateLevelType;
    }
    /**
     * Specify whether the rate applied on bundle or indiividual package.
     *
     * @param string $rateLevelType
     *
     * @return self
     */
    public function setRateLevelType(string $rateLevelType) : self
    {
        $this->initialized['rateLevelType'] = true;
        $this->rateLevelType = $rateLevelType;
        return $this;
    }
    /**
     * Specify whether the charges applied on current or all packages.
     *
     * @return string
     */
    public function getChargeLevelType() : string
    {
        return $this->chargeLevelType;
    }
    /**
     * Specify whether the charges applied on current or all packages.
     *
     * @param string $chargeLevelType
     *
     * @return self
     */
    public function setChargeLevelType(string $chargeLevelType) : self
    {
        $this->initialized['chargeLevelType'] = true;
        $this->chargeLevelType = $chargeLevelType;
        return $this;
    }
    /**
     * Specify the Charges Type.
     *
     * @return string
     */
    public function getChargeType() : string
    {
        return $this->chargeType;
    }
    /**
     * Specify the Charges Type.
     *
     * @param string $chargeType
     *
     * @return self
     */
    public function setChargeType(string $chargeType) : self
    {
        $this->initialized['chargeType'] = true;
        $this->chargeType = $chargeType;
        return $this;
    }
}