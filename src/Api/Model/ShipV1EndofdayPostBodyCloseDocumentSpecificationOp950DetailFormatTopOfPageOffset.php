<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPostBodyCloseDocumentSpecificationOp950DetailFormatTopOfPageOffset extends \ArrayObject
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
     * The numeric quantity of this measurement.
     *
     * @var string
     */
    protected $value;
    /**
     * The units for this measurement.
     *
     * @var string
     */
    protected $units;
    /**
     * The numeric quantity of this measurement.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The numeric quantity of this measurement.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The units for this measurement.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * The units for this measurement.
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
}