<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate extends \ArrayObject
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
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6.
     *
     * @var float
     */
    protected $rate;
    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     *
     * @var string
     */
    protected $fromCurrency;
    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     *
     * @var string
     */
    protected $intoCurrency;

    /**
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6.
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6.
     */
    public function setRate(float $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }

    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function getFromCurrency(): string
    {
        return $this->fromCurrency;
    }

    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function setFromCurrency(string $fromCurrency): self
    {
        $this->initialized['fromCurrency'] = true;
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function getIntoCurrency(): string
    {
        return $this->intoCurrency;
    }

    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>.
     */
    public function setIntoCurrency(string $intoCurrency): self
    {
        $this->initialized['intoCurrency'] = true;
        $this->intoCurrency = $intoCurrency;

        return $this;
    }
}
