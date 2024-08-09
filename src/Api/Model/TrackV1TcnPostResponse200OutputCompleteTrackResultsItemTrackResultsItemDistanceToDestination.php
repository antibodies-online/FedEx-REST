<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputCompleteTrackResultsItemTrackResultsItemDistanceToDestination extends \ArrayObject
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
     * Field which holds the distance unit type.
     *
     * @var string
     */
    protected $units;
    /**
     * Field which holds the value for the distance.<br> Example: 685.78
     *
     * @var float
     */
    protected $value;
    /**
     * Field which holds the distance unit type.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Field which holds the distance unit type.
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;
        return $this;
    }
    /**
     * Field which holds the value for the distance.<br> Example: 685.78
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Field which holds the value for the distance.<br> Example: 685.78
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}