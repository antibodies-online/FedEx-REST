<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailTotalDimWeight extends \ArrayObject
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
     * Weight Value. Maximum Length is 99999. <br> Example: 10.0
     *
     * @var float
     */
    protected $value;
    /**
     * Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }
    /**
     * Specifies the package weight unit. For Dry Ice the unit of measure is KG.
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
     * Weight Value. Maximum Length is 99999. <br> Example: 10.0
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Weight Value. Maximum Length is 99999. <br> Example: 10.0
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