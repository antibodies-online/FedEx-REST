<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputlocationDetailListItempackageMaximumLimitsweight extends \ArrayObject
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
     * Specify the weighing unit of the package.
     *
     * @var string
     */
    protected $units;
    /**
     * This is package weight. Max. Length is 99999.
     *
     * @var float
     */
    protected $value;

    /**
     * Specify the weighing unit of the package.
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Specify the weighing unit of the package.
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

    /**
     * This is package weight. Max. Length is 99999.
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * This is package weight. Max. Length is 99999.
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
