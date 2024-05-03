<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsAncillaryFeesAndTaxesItem extends \ArrayObject
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
     * Specifies the list of ancillary fees And Taxes.
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
     * Specifies the list of ancillary fees And Taxes.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Specifies the list of ancillary fees And Taxes.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
