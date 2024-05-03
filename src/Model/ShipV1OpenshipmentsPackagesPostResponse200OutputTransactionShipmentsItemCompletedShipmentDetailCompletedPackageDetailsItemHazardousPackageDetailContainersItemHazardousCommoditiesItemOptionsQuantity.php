<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsQuantity extends \ArrayObject
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
     * Indicate the measure of units quantity to be validated.
     *
     * @var string
     */
    protected $quantityType;
    /**
     * Indicate the amount of the commodity in alternate units.<br>Example: 24.56.
     *
     * @var float
     */
    protected $amount;
    /**
     * Indicate the unit of measure.<br>Example: KG.
     *
     * @var string
     */
    protected $units;

    /**
     * Indicate the measure of units quantity to be validated.
     */
    public function getQuantityType(): string
    {
        return $this->quantityType;
    }

    /**
     * Indicate the measure of units quantity to be validated.
     */
    public function setQuantityType(string $quantityType): self
    {
        $this->initialized['quantityType'] = true;
        $this->quantityType = $quantityType;

        return $this;
    }

    /**
     * Indicate the amount of the commodity in alternate units.<br>Example: 24.56.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Indicate the amount of the commodity in alternate units.<br>Example: 24.56.
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Indicate the unit of measure.<br>Example: KG.
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Indicate the unit of measure.<br>Example: KG.
     */
    public function setUnits(string $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }
}
