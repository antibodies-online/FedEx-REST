<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentRequestedPackageLineItemsItemVariableHandlingChargeDetailFixedValue extends \ArrayObject
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
     * fixed variable handling charge amount
     *
     * @var float
     */
    protected $amount;
    /**
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @var string
     */
    protected $currency;
    /**
     * fixed variable handling charge amount
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * fixed variable handling charge amount
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
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * fixed variable handling charge currency type<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
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