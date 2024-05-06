<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailCommercialInvoicePackingCosts extends \ArrayObject
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
     * This is the amount. Maximum limit is 5 digits before decimal.<br>Example: 12.45
     *
     * @var float
     */
    protected $amount;
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * This is the amount. Maximum limit is 5 digits before decimal.<br>Example: 12.45
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * This is the amount. Maximum limit is 5 digits before decimal.<br>Example: 12.45
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
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency codes</a>
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