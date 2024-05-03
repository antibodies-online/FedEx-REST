<?php

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem extends \ArrayObject
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
     * Specifies the list of ancillary fees And Taxes
     *
     * @var float
     */
    protected $amount;
    /**
     * Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @var string
     */
    protected $description;
    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the list of ancillary fees And Taxes
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Specifies the list of ancillary fees And Taxes
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
     * Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
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
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
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