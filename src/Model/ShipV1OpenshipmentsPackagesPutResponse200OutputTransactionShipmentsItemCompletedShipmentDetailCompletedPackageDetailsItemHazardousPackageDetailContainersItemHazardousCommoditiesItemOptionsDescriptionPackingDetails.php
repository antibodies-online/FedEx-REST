<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemHazardousPackageDetailContainersItemHazardousCommoditiesItemOptionsDescriptionPackingDetails extends \ArrayObject
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
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions.
     *
     * @var string
     */
    protected $packingInstructions;
    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     *
     * @var bool
     */
    protected $cargoAircraftOnly;

    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions.
     */
    public function getPackingInstructions(): string
    {
        return $this->packingInstructions;
    }

    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions.
     */
    public function setPackingInstructions(string $packingInstructions): self
    {
        $this->initialized['packingInstructions'] = true;
        $this->packingInstructions = $packingInstructions;

        return $this;
    }

    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     */
    public function getCargoAircraftOnly(): bool
    {
        return $this->cargoAircraftOnly;
    }

    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     */
    public function setCargoAircraftOnly(bool $cargoAircraftOnly): self
    {
        $this->initialized['cargoAircraftOnly'] = true;
        $this->cargoAircraftOnly = $cargoAircraftOnly;

        return $this;
    }
}
