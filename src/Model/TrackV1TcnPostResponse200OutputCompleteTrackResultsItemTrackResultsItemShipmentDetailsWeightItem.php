<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemShipmentDetailsWeightItem extends \ArrayObject
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
     * This is package weight type.
     *
     * @var string
     */
    protected $unit;
    /**
     * This is package weight. Max. Length is 99999. <br> Example: 22222.0.
     *
     * @var string
     */
    protected $value;

    /**
     * This is package weight type.
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * This is package weight type.
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    /**
     * This is package weight. Max. Length is 99999. <br> Example: 22222.0.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * This is package weight. Max. Length is 99999. <br> Example: 22222.0.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
