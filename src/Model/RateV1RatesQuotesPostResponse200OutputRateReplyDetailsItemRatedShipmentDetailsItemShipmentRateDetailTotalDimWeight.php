<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetailTotalDimWeight extends \ArrayObject
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
     * Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     *
     * @var string
     */
    protected $units;
    /**
     * Specifies the package weight.<br> Example: 68.25.
     *
     * @var float
     */
    protected $value;

    /**
     * Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

    /**
     * Specifies the package weight.<br> Example: 68.25.
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Specifies the package weight.<br> Example: 68.25.
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
