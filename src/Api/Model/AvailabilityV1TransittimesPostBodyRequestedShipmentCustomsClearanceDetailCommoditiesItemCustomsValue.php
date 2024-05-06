<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentCustomsClearanceDetailCommoditiesItemCustomsValue extends \ArrayObject
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
     * Indicate the amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * Indicate the amount.
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Indicate the amount.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
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