<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentLegRateDetailsItemcurrencyExchangeRate extends \ArrayObject
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
     * The currency code for the original (converted FROM) currency.
     *
     * @var string
     */
    protected $fromCurrency;
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @var string
     */
    protected $intoCurrency;
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @var float
     */
    protected $rate;
    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @return string
     */
    public function getFromCurrency() : string
    {
        return $this->fromCurrency;
    }
    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @param string $fromCurrency
     *
     * @return self
     */
    public function setFromCurrency(string $fromCurrency) : self
    {
        $this->initialized['fromCurrency'] = true;
        $this->fromCurrency = $fromCurrency;
        return $this;
    }
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @return string
     */
    public function getIntoCurrency() : string
    {
        return $this->intoCurrency;
    }
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @param string $intoCurrency
     *
     * @return self
     */
    public function setIntoCurrency(string $intoCurrency) : self
    {
        $this->initialized['intoCurrency'] = true;
        $this->intoCurrency = $intoCurrency;
        return $this;
    }
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
}