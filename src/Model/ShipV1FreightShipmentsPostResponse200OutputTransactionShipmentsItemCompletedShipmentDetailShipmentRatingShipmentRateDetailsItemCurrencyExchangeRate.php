<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate extends \ArrayObject
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
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6
     *
     * @var float
     */
    protected $rate;
    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @var string
     */
    protected $fromCurrency;
    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see currencycodes</a>
     *
     * @var string
     */
    protected $intoCurrency;
    /**
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6
     *
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }
    /**
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6
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
    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @return string
     */
    public function getFromCurrency() : string
    {
        return $this->fromCurrency;
    }
    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
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
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see currencycodes</a>
     *
     * @return string
     */
    public function getIntoCurrency() : string
    {
        return $this->intoCurrency;
    }
    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see currencycodes</a>
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
}