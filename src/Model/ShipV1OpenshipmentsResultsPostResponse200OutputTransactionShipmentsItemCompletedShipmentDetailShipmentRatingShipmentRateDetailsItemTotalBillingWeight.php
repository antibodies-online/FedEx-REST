<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsResultsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight extends \ArrayObject
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
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     *
     * @var string
     */
    protected $units;
    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>.
     *
     * @var float
     */
    protected $value;

    /**
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>.
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>.
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
