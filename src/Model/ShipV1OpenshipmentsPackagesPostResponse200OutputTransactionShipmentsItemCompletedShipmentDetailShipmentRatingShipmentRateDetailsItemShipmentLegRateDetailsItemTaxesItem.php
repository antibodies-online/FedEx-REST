<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItemTaxesItem extends \ArrayObject
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
     * Indicates the amount of tax.<br>Example: 10.0.
     *
     * @var float
     */
    protected $amount;
    /**
     * Indicates the level of tax.
     *
     * @var string
     */
    protected $level;
    /**
     * Specifies the tax description.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies the type of the tax.
     *
     * @var string
     */
    protected $type;

    /**
     * Indicates the amount of tax.<br>Example: 10.0.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Indicates the amount of tax.<br>Example: 10.0.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Indicates the level of tax.
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Indicates the level of tax.
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * Specifies the tax description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Specifies the tax description.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Specifies the type of the tax.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Specifies the type of the tax.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
