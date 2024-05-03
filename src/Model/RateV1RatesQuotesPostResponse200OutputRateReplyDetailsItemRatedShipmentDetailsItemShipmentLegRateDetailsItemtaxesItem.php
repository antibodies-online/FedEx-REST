<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItemtaxesItem extends \ArrayObject
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
     * Specifies the list of tax amounts
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies the localized name of the tax.
     *
     * @var string
     */
    protected $name;
    /**
     * Specifies the description of the Surcharge/Tax.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the type of Surcharge/Tax.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the list of tax amounts
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies the list of tax amounts
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
     * Specifies the localized name of the tax.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Specifies the localized name of the tax.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specifies the description of the Surcharge/Tax.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Specifies the description of the Surcharge/Tax.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specifies the type of Surcharge/Tax.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Specifies the type of Surcharge/Tax.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}