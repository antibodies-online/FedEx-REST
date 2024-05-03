<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsRatedPackagesItemPackageRateDetailSurchargesItem extends \ArrayObject
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
     * Specifies the surcharge type.<br>Example: FUEL <br><a onclick='loadDocReference("surcharges")'>Click here to see more on Surcharges.</a>.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the description of the surcharge.<br>Example: Fuel Surcharge.
     *
     * @var string
     */
    protected $description;
    /**
     * Indicate the amount.<br> Example: 5.42.
     *
     * @var float
     */
    protected $amount;
    /**
     * Specifies the level of surcharge. <br> Example: level.
     *
     * @var string
     */
    protected $level;
    /**
     * The localized name of the surcharge. <br> Example: name.
     *
     * @var string
     */
    protected $name;

    /**
     * Specifies the surcharge type.<br>Example: FUEL <br><a onclick='loadDocReference("surcharges")'>Click here to see more on Surcharges.</a>.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Specifies the surcharge type.<br>Example: FUEL <br><a onclick='loadDocReference("surcharges")'>Click here to see more on Surcharges.</a>.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Specifies the description of the surcharge.<br>Example: Fuel Surcharge.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Specifies the description of the surcharge.<br>Example: Fuel Surcharge.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Indicate the amount.<br> Example: 5.42.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Indicate the amount.<br> Example: 5.42.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Specifies the level of surcharge. <br> Example: level.
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Specifies the level of surcharge. <br> Example: level.
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * The localized name of the surcharge. <br> Example: name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The localized name of the surcharge. <br> Example: name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}